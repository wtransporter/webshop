<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public static function boot() {
        parent::boot();

        static::created(function($article){
            $article->update(['slug' => $article->prepareForSlug($article->title)]);
        });
    }

    private function prepareForSlug($slug)
    {
        return str_replace(',', '',str_replace('/', '', $slug));
    }

    public function path()
    {
    	return '/categories/' . $this->categories->first()->slug . '/' . $this->slug;
    }
    
    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function adminPath()
    {
    	return '/tp-admin/articles/'. $this->slug;
    }

    public function imagePath()
    {
    	$imagePath = '/images/proizvodi/'.$this->id.'/160x160_'.$this->image;
    	
    	return file_exists(public_path().$imagePath) ? $imagePath : noImage();
    }

    public function imageBasePath()
    {
        return '/images/proizvodi/'.$this->id;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setSlugAttribute($value)
    {
        $slug = Str::slug($value);

        if (static::whereSlug($slug)->where('id', '<>', $this->id)->exists()) {
            $slug = "{$slug}-" . md5($this->id);
        }

        return $this->attributes['slug'] = $slug;
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order')->withPivot('price');
    }

    public static function import($articles)
    {
        $articles->each(function($article, $key) {
            static::updateOrCreate(['bs_code' => $article->ID], [
                'title' => $article->Name,
                // 'slug' => $article->ID.'-'.Str::slug($article->Name, '-'),
                'code' => $article->Barcode,
                'bs_code' => $article->ID,
                'price' => $article->RetailPrice,
                'amount' => $article->Amount,
                'tax' => $article->VatID,
            ]);
        });
    }

    public function activate()
    {
        $this->update(['active' => true]);
    }
    
    public function deactivate()
    {
        $this->update(['active' => false]);
    }

    /**
     * Only active articles to display
     */
    public function scopeActiveArticles($query)
    {
        return $query->whereActive(1);
    }

    public function scopeNewest($query, $take = 8)
    {
        $ids = Category::all()->pluck('id');
        return static::whereHas('categories', function () use ($query, $ids) {
            $query->whereIn('categories.id', $ids);
        })->activeArticles()->latest()->take($take);
    }
}
