<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\User\PersonalInfoController;
use App\Http\Controllers\Site\User\PersonalInformationController;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('site.user.index');
});

Route::get('/Home', ['as' => 'home', 'uses' => 'Site\User\PersonalInformationController@Home']);

Route::get('/CV', ['as' => 'cv', 'uses' => 'Site\User\PersonalInformationController@CV']);

Route::get('/PersonaInfo', ['as' => 'Get.PersonalInfo', 'uses' => 'Site\User\PersonalInformationController@GetPersonalInfo']);

Route::get('/Hobbies', ['as' => 'Get.Hobbies', 'uses' => 'Site\User\PersonalInformationController@GetHobbies']);

Route::get('/Projects', ['as' => 'Get.Projects', 'uses' => 'Site\User\PersonalInformationController@GetProjects']);

Route::get('/Courses', ['as' => 'Get.Courses', 'uses' => 'Site\User\PersonalInformationController@GetCourses']);

Route::get('/Project/{projectId}', ['as' => 'get.project', 'uses' => 'Site\User\PersonalInformationController@GetProject']);

Route::get('/Project/GetWithDetail/{projectId}', ['as' => 'projectWithDetail', 'uses' => 'Site\User\PersonalInformationController@GetProjectWithDetail']);

Route::get('/WorkExperiences', ['as' => 'workexperiences', 'uses' => 'Site\User\PersonalInformationController@GetWorkExperiences']);

Route::get('/Project/ProjectTools/{projectId}', ['as' => 'projectToolsByProject', 'uses' => 'Site\User\PersonalInformationController@GetToolsByProject']);

Route::get('/Project/ProjectImages/{projectId}', ['as' => 'projectimages', 'uses' => 'Site\User\PersonalInformationController@getProjectImages']);

Route::get('/CV/GetCV', ['as' => 'getCV', 'uses' => 'Site\User\PersonalInformationController@GetCV']);

Route::post('/SendEmail',['as'=>'sendmail','uses'=>'Site\User\SendEmailController@PostSendEmail']);


Route::get('/test-email',['as'=>'sendmessageemail','uses'=>'Site\User\SendEmailController@PostSendEmail']);
