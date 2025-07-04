<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionOneTable extends Migration
{
    public function up()
    {
        Schema::create('section_one', function (Blueprint $table) {
            $table->increments('id');          // Auto-incrementing ID
            $table->string('title');           // Title field
            $table->text('description');       // Description field
            $table->string('image_url');       // Image URL field
            $table->timestamps();              // Adds created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('section_one');
    }
}

