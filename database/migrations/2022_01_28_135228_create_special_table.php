<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special', function (Blueprint $table) {
            $table->id();
            $table->integer('userid')->nullable();
            $table->integer('carouselid');
            $table->integer('quantity');
            $table->boolean('status');
            $table->string('ipAddress')->nullable();
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
        Schema::dropIfExists('special');
    }
}
