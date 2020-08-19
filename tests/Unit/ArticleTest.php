<?php

namespace Tests\Unit;

use App\Article;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{
    
    use RefreshDatabase;
    
/** @test */
public function demo()
{
    $this->assertTrue(1==1);
}
}
