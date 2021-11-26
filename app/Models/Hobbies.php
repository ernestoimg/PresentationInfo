<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    //
    protected $table = "hobbies";

    public $incrementing = false;

    protected $fillable =['Id','HobbieName','IsVisible','IconName'];
}
