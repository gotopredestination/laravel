<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maintexts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintexts',function($t){
			$t->increments('id');
			$t->string('name',60);
			$t->string('url');
			$t->enum('showhide',array('show','hide'))->default('show');
			$t->timestamps();
		});
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('maintexts');
    }
}
