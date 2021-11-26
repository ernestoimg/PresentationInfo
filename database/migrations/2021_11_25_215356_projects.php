<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //
        Schema::create('Projects',function(Blueprint $table){
            $table->engine="InnoDb";
            $table->uuid('Id')->primary()->nullable(false);
            $table->string('Alias',50);
            $table->string('ProjectName',200);
            $table->string('Icon',100);
            $table->text('Description');
            $table->longText("Image");
            $table->integer("Order");
            $table->tinyInteger("IsVisible");
            $table->string("Company",100);
            $table->string('ProjectType',100);
            $table->string("GitUrl",200)->default("");
            $table->string("Url",200)->default("");
            $table->string("Abr",10);
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
        //
        Schema::dropIfExists('Projects');
    }
}
