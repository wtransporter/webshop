<?php

namespace App;

use App\User;
use App\ArticleOrder;
use App\Events\OrderCreated as EventOrderCreated;
use App\Notifications\OrderCreated;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function articles()
    {
        return $this->belongsToMany('App\Article')->withPivot(['price', 'amount']);
    }

    public function notify()
    {    
        User::whereHead(1)->get()->each->notify(new OrderCreated($this));
    }

    public function path()
    {
        return 'orders/'. $this->id;
    }

    public function addItems($articles)
    {
        foreach ($articles as $article) {
            ArticleOrder::create([
                'order_id' => $this->id,
                'article_id' => $article['items']->id,
                'amount' => $article['amount'],
                'price' => $article['price'],
                'discount' => 0
            ]);
        }

        $this->notify();

        event(new EventOrderCreated($this));
    }

    public function sentToWebservice()
    {
        $this->update(['status' => 99]);
    }
}
