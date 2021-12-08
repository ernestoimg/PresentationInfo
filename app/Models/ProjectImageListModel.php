<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImageListModel extends Model
{
    //
    protected $table = "projectimagelist";

    public $increment = false;

    protected $fillable = ["Id","ProjectId","Images"];
}
