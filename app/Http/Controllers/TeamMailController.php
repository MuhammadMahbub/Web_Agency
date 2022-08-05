<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TeamMailSend;
class TeamMailController extends Controller
{
    public function mail_send_team_member(Request $request){

        $request->validate([
            'client_name'        => 'required',
            'client_email'       => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'client_phone'       => 'required|regex:/(0)[0-9]{9}/',
            'message_subject'    => 'required',
            'message_details'    => 'required',
        ],[
            'client_email.regex' => 'Please enter your valid email address!',
            'client_phone.regex' => 'Please enter your valid phone number',
        ]);

        $client_name        = $request->client_name;
        $client_email       = $request->client_email;
        $client_phone       = $request->client_phone;
        $message_subject    = $request->message_subject;
        $message_details    = $request->message_details;
        
        Mail::to($client_email)->send(new TeamMailSend($client_name, $client_email, $client_phone, $message_subject, $message_details));

        return back()->with('success', 'Your Mail Sent Successfully!');

    }
}
