<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    //
<<<<<<< HEAD
    protected $table = "Hobbies";
=======
    protected $table = "hobbies";
>>>>>>> 5b225e1042d6082e7d85fcfca6cf0b98ec269fcc

    public $incrementing = false;

    protected $fillable =['Id','HobbieName','IsVisible','IconName'];
}
