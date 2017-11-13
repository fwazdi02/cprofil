<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  
    /*
      `blog_id` int(11) NOT NULL,
      `user_id` int(11) NOT NULL,
      `category_id` int(11) NOT NULL,
      `title` varchar(225) NOT NULL,
      `slug_blog` varchar(225) NOT NULL,
      `content` text NOT NULL,
      `image` varchar(225) NOT NULL,
      `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      `status` varchar(100) NOT NULL,
      `keywords` text NOT NULL
    */

    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('blog_id');
            $table->integer('user_id')->notnull()->unsigned() ;
            $table->integer('categoty_id')->notnull()->unsigned() ;
            $table->string('title')->notnull() ;
            $table->string('slug_blog')->notnull()->unique() ;
            $table->text('content')->notnull() ;
            $table->string('image') ;
            $table->string('status', 8)->notnull()->default('publish') ;
            $table->mediumText('keywords');
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
        Schema::dropIfExists('blogs');
    }
}
