<?php

namespace App\Http\Controllers\Site\User;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App;
use DebugBar\DebugBar;
use Illuminate\Support\Facades\UserSendMailer;


class SendEmailController extends Controller
{
    //
    public function PostSendEmail(){
        
        $test = new ResponseSucess;

        $test->result = "Testing";

        dd($test);
        return response()->json($test);
    }
}

class ResponseSucess{
    public $result;
}
