<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTools extends Model
{
    //
    protected $table = "projecttools";

    public $incrementing = false;

    protected $fillable = ["Id","ToolName","UserTimeMonths","NivelQualification","ProjectId","DetailOfUse","IconTool"];
}
