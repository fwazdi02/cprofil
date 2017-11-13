<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*
      `product_id` int(11) NOT NULL,
      `user_id` int(11) NOT NULL,
      `product_name` varchar(225) NOT NULL,
      `slug_product` varchar(225) NOT NULL,
      `image` varchar(225) NOT NULL,
      `product_description` text NOT NULL,
      `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      `status` varchar(100) NOT NULL
    */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('user_id')->unsigned()->notnull() ;
            $table->string('product_name')->notnull() ;
            $table->string('slug_product')->notnull() ;
            $table->string('image')->notnull() ;
            $table->text('product_description')->notnull() ;
            $table->string('status', 8)->notnull()->default('active') ;
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
        Schema::dropIfExists('products');
    }
}
