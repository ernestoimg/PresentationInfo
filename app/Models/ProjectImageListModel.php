<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImageListModel extends Model
{
    //
<<<<<<< HEAD
    protected $table = "ProjectImageList";
=======
    protected $table = "projectimagelist";
>>>>>>> 5b225e1042d6082e7d85fcfca6cf0b98ec269fcc

    public $increment = false;

    protected $fillable = ["Id","ProjectId","Images"];
}
