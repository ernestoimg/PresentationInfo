<?php

namespace App\Http\Controllers\Site\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/* Models */
use App\Models\PersonalInformation;
use App\Models\Hobbies;
use App\Models\Projects;
use App\Models\WorkExperienceModel;
use App\Models\ProjectToolsModel;
use App\Models\ProjectImageListModel;
use App\Models\AttachFilesModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;

class PersonalInfoController extends Controller
{
    //

    public function GetHobbies(Hobbies $hobbies)
    {
        $activeHobbies = DB::table('Hobbies')->where('IsVisible', 1)->get();

        return response()->json($activeHobbies);
    }
}
