<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*
      `category_id` int(11) NOT NULL,
      `user_id` int(11) NOT NULL,
      `category_name` varchar(225) NOT NULL,
      `slug_category` varchar(225) NOT NULL,
      `order_category` int(11) NOT NULL,
      `category_description` text NOT NULL,
      `date_category` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    */


    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('category_id');
            $table->integer('user_id')->notnull()->unsigned();
            $table->string('category_name')->notnull() ;
            $table->string('slug_category')->notnull()->unique() ;
            $table->integer('order_category')->notnull()->unsigned() ;
            $table->mediumText('category_description')->notnull() ;
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
        Schema::dropIfExists('categories');
    }
}
