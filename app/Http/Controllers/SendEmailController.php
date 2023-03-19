<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\SendEmail;
use App\Models\User;

class SendEmailController extends Controller
{

    public function index()
    {

        return view('admin.mail.mailForm');
    }
    public function send(Request $request)
    {  
        $user = auth()->user();
        if($user->permission) {  
            $subject = $request->subject;
            $body = $request->body;
        
            $eventNoticeMail = new SendEmail(
                $subject,
                $body
            );
      
        
            event($eventNoticeMail);

            return redirect()->back()->with('success', 'Email enviado com sucesso!');
        }else{
            return abort(403);
        }
    }

}