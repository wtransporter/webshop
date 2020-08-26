<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->foreignId('article_id');
            $table->double('amount', 15,2)->default(0);
            $table->double('price', 15,2)->default(0);
            $table->double('discount', 15,2)->default(0);
            $table->timestamps();

            $table->foreign('order_id')
                ->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('article_id')
                ->references('id')->on('articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_order');
    }
}
