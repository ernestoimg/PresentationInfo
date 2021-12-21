<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContacteMe extends Model
{
    //
    protected $table = 'contactme';

    protected $fillable = ['Id', 'Email', 'Issue', 'Message'];
}
