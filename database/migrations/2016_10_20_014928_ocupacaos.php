<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Ocupacaos.
 *
 * @author  The scaffold-interface created at 2016-10-20 01:49:28am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Ocupacaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('ocupacaos',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nome');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('ocupacaos');
    }
}
