<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectToolsModel extends Model
{
    //
    protected $table ="projecttools";

    public $increment = false;

    protected $fillable = ['Id','ToolName','UseTimeInMonths','NivelQualification','DetailOfUse','IconTool'];
}
