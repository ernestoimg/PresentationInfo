<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTools extends Model
{
    //
<<<<<<< HEAD
    protected $table = "ProjectTools";
=======
    protected $table = "projecttools";
>>>>>>> 5b225e1042d6082e7d85fcfca6cf0b98ec269fcc

    public $incrementing = false;

    protected $fillable = ["Id","ToolName","UserTimeMonths","NivelQualification","ProjectId","DetailOfUse","IconTool"];
}
