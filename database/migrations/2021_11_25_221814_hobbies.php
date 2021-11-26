<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hobbies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Hobbies',function(Blueprint $table){
            $table->engine="InnoDB";
            $table->uuid('Id')->primary()->unique();
            $table->string('HobbieName',50);
            $table->boolean('IsVisible')->default(false);
            $table->string('IconName',100);
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
        Schema::dropIfExists('Hobbies');
    }
}
