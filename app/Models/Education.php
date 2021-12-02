<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
<<<<<<< HEAD
    protected $table = 'Education';
=======
    protected $table = 'education';
>>>>>>> 5b225e1042d6082e7d85fcfca6cf0b98ec269fcc

    protected $fillable = ['Id', 'SchoolName', 'Title', 'StartPeriod', 'EndPeriod', 'MethodTitle', 'ProjectId','Image','OrderItem'];

}
