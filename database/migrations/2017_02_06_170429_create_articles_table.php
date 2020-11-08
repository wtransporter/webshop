<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('slug')->unique();
            $table->string('manufacturer',30)->nullable();
            $table->text('description')->nullable();
            $table->string('code',15)->default('')->unique();
            $table->integer('bs_code')->unique();
            $table->smallinteger('category_id')->default(0);
            $table->tinyInteger('sale')->default(0);
            $table->tinyInteger('active')->default(0);
            $table->double('price', 15, 2)->default(0);
            $table->double('discount', 15, 2)->default(0);
            $table->double('amount', 15,2)->default(0);
            $table->string('tax',2)->default('S1');
            $table->string('image',50)->nullable();
            $table->string('image1',50)->nullable();
            $table->string('image2',50)->nullable();
            $table->string('image3',50)->nullable();
            $table->string('image4',50)->nullable();
            $table->integer('subcat_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
