<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $table = 'Education';

    protected $fillable = ['Id', 'SchoolName', 'Title', 'StartPeriod', 'EndPeriod', 'MethodTitle', 'ProjectId','Image','OrderItem'];

}
