<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title')->unique();
            $table->text('catch_line');
            $table->longText('body');
            $table->unsignedBigInteger('category_id');
            $table->longText('excerpt');
            $table->integer('views')->default(0);
            $table->boolean('featured_in_category')->default(false);
            $table->boolean('featured_in_blog')->default(false);
            $table->string('cover_image');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
