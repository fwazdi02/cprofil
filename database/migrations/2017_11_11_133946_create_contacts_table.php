<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*
    message_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `messages` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('message_id');
            $table->string('name')->notnull() ;
            $table->string('email', 56)->notnull() ;
            $table->string('subject', 126)->notnull() ;
            $table->text('messages')->notnull() ;
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
        Schema::dropIfExists('contacts');
    }
}
