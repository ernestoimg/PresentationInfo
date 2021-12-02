<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectProjectsTools extends Migration
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
         Schema::table('ProjectTools',function(Blueprint $table){
            $table->foreignUuid('ProjectId')->references('Id')->on('Projects');
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
        Schema::table('ProjectTools',function(Blueprint $table){
            $table->dropForeign('ProjectId');
        });
    }
}
