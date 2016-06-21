<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;


class UserController extends Controller
{
  // public function sendEmailReminder(Request $request)
  // {
  //     dd($request->all());
  //     $user = User::findOrFail($id);
  //
  //     Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
  //         $m->from('hello@app.com', 'Your Application');
  //
  //         $m->to($user->email, $user->name)->subject('Your Reminder!');
  //     });
  //
  //     return view('emails.reminder')
  // }

  public function bla()
  {
    return view('emailForm');
  }
  // 
  // public function store(Request $request)
  // {
  //   dd($request->all());
  // }

  public function sendEmail()
  {
    Mail::send('emails.test', ['name' => 'Novica'], function($message) {
      $message->to('holmfridurge@gmail.com', 'Frida')->subject('Welcome!');
    });
  }
}
