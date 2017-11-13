<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


/*
config_id` int(11) NOT NULL,
  `nameweb` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `keywords` text NOT NULL,
  `google_maps` text NOT NULL,
  `logo` varchar(225) NOT NULL,
  `icon` varchar(225) NOT NULL,
  `about` text NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `phone_number` varchar(225) NOT NULL,
  `metatext` text NOT NULL,
  `fax` text NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `twitter` varchar(225) NOT NULL,
  `instagram` varchar(225) NOT NULL,
  `google_plus` varchar(225) NOT NULL,
  `pinterest` varchar(225) NOT NULL

*/

    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->increments('config_id');
            $table->string('web_name')->notnull() ;
            $table->string('email')->notnull() ;
            $table->string('keywords')->notnull() ;
            $table->string('google_maps')->notnull() ;
            $table->string('logo')->notnull() ;
            $table->string('icon')->notnull() ;
            $table->text('about')->notnull() ;
            $table->string('address')->notnull() ;
            $table->string('city')->notnull() ;
            $table->string('zip_code')->notnull() ;
            $table->string('phone_number')->notnull() ;
            $table->mediumText('metatext')->notnull() ;
            $table->string('fax')->notnull() ;
            $table->string('facebook')->notnull() ;
            $table->string('twitter')->notnull() ;
            $table->string('instagram')->notnull() ;
            $table->string('google_plus')->notnull() ;
            $table->string('pinterest')->notnull() ;
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
        Schema::dropIfExists('configs');
    }
}
