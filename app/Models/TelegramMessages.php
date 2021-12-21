<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TelegramMessages extends Model
{
    //
    protected $table = 'messages_telegram';

    protected $fillable=['Id','Message','SessionId','MessageId','IsResponse'];
}
