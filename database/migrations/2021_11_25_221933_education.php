<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Education extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Education',function(Blueprint $table){
            $table->engine="InnoDB";
            $table->uuid('Id')->primary()->nullable(false);
            $table->string('SchoolName',100);
            $table->string('Title',100);
            $table->dateTime('StartPeriod', $precision = 0);
            $table->dateTime('EndPeriod',$precision = 0);
            $table->string('MethodTitle',100);
            $table->uuid('ProjectId')->default('');
            $table->longText("ImageCourse");
            $table->integer("OrderItem");
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
        Schema::dropIfExists('Education');
    }
}
