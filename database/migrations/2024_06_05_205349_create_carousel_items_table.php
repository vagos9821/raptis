<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselItemsTable extends Migration
{
    public function up()
    {
        Schema::create('carousel_items', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('alt_text');
            $table->string('svg_name');
            $table->text('text_content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carousel_items');
    }
}

