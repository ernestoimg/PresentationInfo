<?php

namespace App\Http\Controllers\Site\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use pschocke\TelegramLoginWidget\Facades\TelegramLoginWidget;
use App\Models\TelegramMessages;
use Exception;

class TelegramController extends Controller
{
    public function addMessage(Request $request)
    {
        $result = new DataResponse();

        try {
            $message = new TelegramMessages();

            $message->Id = $request->input('id');
            $message->Message = $request->input('message');
            $message->SessionId = $request->input('sessionid');
            $message->MessageId = $request->input('messageid');
            $message->IsResponse = $request->input('isresponse');

            $message->save();

            $result->hasError = false;
            $result->message = "Se ha enviado correctamente el mensaje";
        } catch (Exception $e) {

            $result->hasError = true;
            $result->message = $e->getMessage();
        }

        return response()->json($result);
    }
    public function getMessageLog($uuid){

        $message = TelegramMessages::where('SessionId', $uuid)->orderBy('MessageId')->get();

        return response()->json($message);
    }
}

class DataResponse{
    public $hasError;
    public $message;
}