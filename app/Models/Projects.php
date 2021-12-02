<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
    
<<<<<<< HEAD
    protected $table = 'Projects';
=======
    protected $table = 'projects';
>>>>>>> 5b225e1042d6082e7d85fcfca6cf0b98ec269fcc

    public $incrementing = false;

    protected $fillable =['Id','Alias','ProjectName','Icon','Description','Image','Order','IsVisible','Company','ProjectType','Abr'];

}
