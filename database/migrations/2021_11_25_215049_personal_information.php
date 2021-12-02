<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonalInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Create the table structure 
        Schema::create('PersonalInformation',function(Blueprint $table){
            $table->engine="InnoDb";
            $table->uuid('Id')->primary()->nullable(false);
            $table->string('Name',150);
            $table->string('FirstName',150);
            $table->string('SecondName',150);
            $table->string('CURP',20);
            $table->string('Address',250);
            $table->smallInteger('CP');
            $table->smallInteger('BirthDay');
            $table->smallInteger('BirthMonth');
            $table->smallInteger('BirthYear');
            $table->string('LicenseNumber',20);
            $table->string('Nationality',50);
            $table->string('Email',100);
            $table->string('MaritalStatus',100);
            $table->string('Profession',50);
            $table->string('AcademicGrade',50);
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
        // Delete the table 
        Schema::dropIfExists('PersonalInformation');
    }
}
