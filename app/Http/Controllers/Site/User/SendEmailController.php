<?php

namespace App\Http\Controllers\Site\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendNewMail;


class SendEmailController extends Controller
{

    //
    public static function PostSendEmail($request)
    {

        Mail::to('ivan.2015.puebla@gmail.com')
            ->queue(new SendNewMail($request));
   
        Mail::to($request["Email"])
            ->queue(new SendNewMail($request));    
    }

    public function Contactme()
    {
        return view('site.user.contactme');
    }
}

class ResponseSucess
{
    public $result;
}
