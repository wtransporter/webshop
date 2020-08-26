<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleOrder extends Model
{
    protected $table = 'article_order';

    protected $guarded = ['id'];
}
