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

class PersonalInformationController extends Controller
{
    //
     /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function GetPersonalInfo(PersonalInformation $personalInformations)
    {
        $personalInfo = $personalInformations->select()->first();

        return response()->json($personalInfo);
    }

    public function GetHobbies(Hobbies $hobbies)
    {
        $activeHobbies = DB::table('hobbies')->where('IsVisible', 1)->get();

        return response()->json($activeHobbies);
    }

    public function GetProjects(Projects $projects)
    {
        $activeProject = DB::table('projects')->where('IsVisible', 1)->orderBy('Order')->get();

        return response()->json($activeProject);
    }

    public function GetCourses()
    {
        $courses = DB::table('education')
            ->leftJoin('projects', 'education.ProjectId', '=', 'projects.Id')
            ->orderBy('Education.OrderItem', 'desc')
            ->get();

        return response()->json($courses);
    }

    public function GetProject($projectId)
    {
        return view('site.user.listing', ['id' => $projectId]);
    }


    public function GetProjectWithDetail($projectId)
    {
        $project = Projects::where('Id', $projectId)->get();

        return response()->json($project);
    }

    public function GetWorkExperiences()
    {
        $workExperiences = WorkExperienceModel::orderBy('Order', 'asc')->get();

        return response()->json($workExperiences);
    }

    public function GetToolsByProject($projectId)
    {
        $projectTools = ProjectToolsModel::where('ProjectId', $projectId)->get();

        return response()->json($projectTools);
    }

    public function Home()
    {
        return view('site.user.index');
    }

    public function CV()
    {
        return view('site.user.cv');
    }

    public function getProjectImages($projectId)
    {
        $projectImage = ProjectImageListModel::where('ProjectId', $projectId)->get();

        return response()->json($projectImage);
    }

    public function GetCV()
    {
        $cvfile = AttachFilesModel::where('name','ErnestoIvanMartinezGarcia')->get();

        return response()->json($cvfile);
    }
}
