<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('type_id')->nullable();
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->string('country');
            $table->string('city');
            $table->string('district');
            $table->string('address');
            $table->integer('price');
            $table->integer('acreage');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('houses');
    }
}
