<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',500);
            $table->string('subtitle',500);
            $table->string('slug',100)->nullable();
            $table->text('body');
            $table->boolean('status')->nullable();
            $table->integer('posted_by')->nullable();
            $table->string('image')->nullable();
            $table->integer('like')->nullable();
            $table->integer('cat_id');
            $table->integer('tag_id');
            $table->integer('dislike')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
