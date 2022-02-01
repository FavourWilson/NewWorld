<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->integer('categoriesid');
            $table->integer('subcategoriesid');
            $table->integer('quantity');
            $table->string('windowsOS');
            $table->string('CPU');
            $table->string('processor');
            $table->string('RAM');
            $table->string('Color');
            $table->string('Screensize');
            $table->string('storage');
            $table->double('price');
            $table->string('photo');
            $table->string('video');
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
        Schema::dropIfExists('products');
    }
}
