<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttachFilesModel extends Model
{
    //
    protected $table ="attachfiles";

    public $autoincrement = false;

    protected $fillable = ['id','name','file','type'];
}
