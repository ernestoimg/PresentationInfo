<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MessagesTelegram extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('messages_telegram',function(Blueprint $table){
            $table->uuid('Id')->unique();
            $table->longText('Message');
            $table->uuid('SessionId');
            $table->bigInteger('MessageId');
            $table->boolean('IsResponse')->default(false);
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
    }
}
