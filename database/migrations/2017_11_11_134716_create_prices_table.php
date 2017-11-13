<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*
  
  `price_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price_name` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `headline` text NOT NULL,
  `description` text NOT NULL,
  `with_service` varchar(100) NOT NULL,
  `no_with_service` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

    */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('price_id');
            $table->integer('user_id')->unsigned()->notnull();
            $table->string('price_name')->notnull();
            $table->bigInteger('price')->notnull();
            $table->text('headline')->notnull();
            $table->text('description')->notnull();
            $table->string('with_service')->notnull();
            $table->string('with_no_service')->notnull();
            $table->string('status', 8)->notnull()->default('active');
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
        Schema::dropIfExists('prices');
    }
}
