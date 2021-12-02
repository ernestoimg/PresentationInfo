<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
    
    protected $table = 'Projects';

    public $incrementing = false;

    protected $fillable =['Id','Alias','ProjectName','Icon','Description','Image','Order','IsVisible','Company','ProjectType','Abr'];

}
