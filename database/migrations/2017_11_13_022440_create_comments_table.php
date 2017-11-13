<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*
      `comment_id` int(11) NOT NULL,
      `blog_id` int(11) NOT NULL,
      `name` varchar(225) NOT NULL,
      `email` varchar(225) NOT NULL,
      `website` varchar(225) NOT NULL,
      `message` text NOT NULL,
      `date_comment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    */

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->string('name')->notnull() ;
            $table->string('email')->notnull() ;
            $table->string('website')->notnull() ;
            $table->text('message')->notnull() ;
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
        Schema::dropIfExists('comments');
    }
}
