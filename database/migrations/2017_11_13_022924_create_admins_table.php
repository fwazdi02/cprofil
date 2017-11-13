<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    /*
      `admin_id` int(11) NOT NULL,
      `username` varchar(225) NOT NULL,
      `slug_admin` varchar(225) NOT NULL,
      `password` varchar(225) NOT NULL,
      `email` varchar(225) NOT NULL
    */

    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('username', 16)->notnull()->unique() ;
            $table->string('email', 56)->notnull()->unique() ;
            $table->string('passwd', 56) ;
            $table->json('options');
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
        Schema::dropIfExists('admins');
    }
}
