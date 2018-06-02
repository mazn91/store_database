<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('code');
            $table->integer('quantity');    
            $table->integer('consumption');
            $table->double('cost');
            $table->double('max_price');
            $table->double('min_price');
            $table->boolean('stock')->default(1);
            $table->boolean('activation')->defualt(1);
            $table->integer('category_id');
            $table->integer('size_id');
            $table->double('size');
            $table->integer('color_id');
            $table->string('color');
            $table->integer('material_id');
            $table->string('material');
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
        Schema::dropIfExists('items');
    }
}
