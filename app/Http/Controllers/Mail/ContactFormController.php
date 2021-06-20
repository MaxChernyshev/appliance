<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function send(Request $request)
    {
//        $json = json_encode($request);
//        http_response_code(SUCCESS_CODE);
//        return redirect()->back(compact('json'));
//dd($request);
        if ($request->method() == 'POST') {
            $body = "<p>Name: $request->name</p>";
            $body .= "<p>Email: $request->email</p>";
            $body .= "<p>Phone: $request->tell</p>";
            $body .= "<p>Address: $request->address</p>";
            $body .= "<p>Date: $request->date</p>";
            $body .= "<p>Time: $request->time</p>";
            $body .= "<p>Email: $request->message</p>";
            Mail::to('info@ivankachernysheva.com')->send(new ContactForm($body));
            return redirect()->back();
        }
        return redirect()->route('home');

    }
}
