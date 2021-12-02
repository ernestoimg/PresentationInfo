<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table ='personalinformation';

    public $incrementing = false;

    protected $fillable =[
        'Id','Name','FirstName','SecondName','CURP','Address','CP','BirthDay','BirthMonth','BirthYear',
        'LicenseNumber','Nationality','Email','MaritalStatus','Profession','AcademicGrade'
    ];
}
