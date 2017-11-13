<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*
      `gallery_id` int(11) NOT NULL,
      `user_id` int(11) NOT NULL,
      `gallery_name` varchar(225) NOT NULL,
      `slug_gallery` varchar(225) NOT NULL,
      `image` varchar(225) NOT NULL,
      `gallery_description` text NOT NULL,
      `position` varchar(100) NOT NULL,
      `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      `status` varchar(100) NOT NULL
    */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('gallery_id');
            $table->integer('user_id')->unsigned()->notnull() ;
            $table->string('gallery_name')->notnull() ;
            $table->string('slug_gallery')->notnull() ;
            $table->string('image')->notnull() ;
            $table->text('gallery_description')->notnull() ;
            $table->string('position')->notnull() ;
            $table->string('status')->notnull() ;
            $table->dateTime('date')->notnull()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
