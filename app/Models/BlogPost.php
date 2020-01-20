<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
        Schema::create('blog_posts',   function  (Blueprint $table) {
        $table->bigIncrements('id');

        $table->bigInteger('category_id')->unsigned();
        $table->bigInteger('user_id')->unsigned();

        $table->string('slug')->unique();
        $table->string('title');

        $table->text('excerpt')->nullable();

        $table->text('content_raw');
        $table->text('content_html');

        $table->boolean('is_published')->default(false);
        $table->timestamp('published_at')->nullable();

        $table->timestamps();
        $table->softDeletes();

        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('category_id')->references('id')->on('blog_categories');
        $table->index('is_published');
});

 //       use SoftDeletes;
}
