<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComercialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comercials', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('name');
            $table->string('category_name');
            $table->string('description');
            $table->decimal('min_price',8,2);
            $table->string('lat');
            $table->string('lng');            
            $table->string('path_img');
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
        Schema::dropIfExists('comercials');
    }
}
