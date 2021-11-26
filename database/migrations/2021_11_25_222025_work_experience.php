<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WorkExperience extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('WorkExperiences', function (Blueprint $table) {
            $table->uuid('Id');
            $table->string("Company",100);
            $table->date("StartDate");
            $table->date("EndDate");
            $table->string("JobTitle",100);
            $table->text("FunctionDescription");
            $table->tinyinteger("Order");
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
        //
        Schema::dropIfExists('WorkExperiences');
    }
}
