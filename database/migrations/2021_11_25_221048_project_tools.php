<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectTools extends Migration
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
         Schema::create('ProjectTools',function(Blueprint $table){
            $table->engine="InnoDb";
            $table->uuid('Id')->primary()->nullable(false);
            $table->string('ToolName',100);
            $table->integer('UseTimeInMonths');
            $table->integer('NivelQualification');
            $table->text("DetailOfUse");
            $table->longText("IconTool");
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
        Schema::dropIfExists('ProjectTools');
    }
}
