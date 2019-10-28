<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Mobileforms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('mobilebrand');
            $table->string('imeinumber');
            $table->string('modelnumber');
            $table->date('purchasingdate');
            $table->string('purchasingfrom');
            $table->string('price');
            $table->binary('uploadbill');
            $table->binary('uploadfront');
            $table->binary('uploadback');
            $table->binary('uploadimei');
        


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
