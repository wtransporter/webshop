<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catproducts', function (Blueprint $table) {
            $table->integer('product_id');
            $table->integer('category_id');
            $table->string('assigned', 20); //varchar(20) NOT NULL,
            $table->string('operater', 20); //varchar(20) NOT NULL,
            $table->timestamps();
            $table->primary(array('product_id', 'category_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catproducts');
    }
}
