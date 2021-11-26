<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperienceModel extends Model
{
    //
    protected $table = "workexperiences";

    public $incrementing = false;

    protected $fillable = ["Id","Company","StartDate","EndDate","JobTitle","FunctionDescription","Order"];
}
