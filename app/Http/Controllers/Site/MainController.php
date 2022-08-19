<?php

namespace App\Http\Controllers\Site;

use App\Mail\MessageMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ValidateMessageForm;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function main()
    {
        return view('site.index');
    }

    public function message(ValidateMessageForm $request)
    {
        $request = array(
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message
        );
        // if (Auth::user()) {
            Mail::to("borashek@inbox.ru")->send(new MessageMail($request));
            return response()->json([
                'status'   => 200,
                'success'  => 'Ваше сообщение успешно отправлено'
            ]);
        // }
    }
}
