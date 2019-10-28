<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //



        Schema::create('Laptopforms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('laptopbrand');
            $table->string('serialnumber');
            $table->string('modelnumber');
            $table->string('productnumber');
            $table->date('purchasingdate');
            $table->string('purchasingfrom');
            $table->integer('price');
            $table->binary('uploadbill');
            $table->binary('uploadfront');
            $table->binary('uploadback');
            $table->binary('uploadserialnumber');
        


            $table->timestamps();
        });  //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
