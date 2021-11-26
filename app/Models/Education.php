<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $table = 'education';

    protected $fillable = ['Id', 'SchoolName', 'Title', 'StartPeriod', 'EndPeriod', 'MethodTitle', 'ProjectId','Image','OrderItem'];

}
