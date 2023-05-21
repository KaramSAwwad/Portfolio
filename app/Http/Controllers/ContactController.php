<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{

    public function sendEmail(SendEmailRequest $request)
    {
        $validated = $request->validated();

//        dd($validated);

        $data = [
            'name' => $validated['name'],
            'message' => $validated['message'],
        ];
        Mail::to('karam.s.awwad@gmail.com')->send(new ContactMail($data));
//        Alert::info('Success Title', 'Success Message');
        toast(trans('messages.the mail has benn send'),'success');
        return redirect()->route('show.welcome.page');
    }


}
