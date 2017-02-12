<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'send']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function send(Request $request) {
        $this->validate($request, [
                'name'     => 'required|max:255',
                'email'    => 'required|email',
                'comment'  => 'required|min:5'
            ]);
        $data = [
              'email' => $request->email,
              'name' => $request->name,
              'bodyMessage' => $request->comment
          ];
          Mail::send('emails.contact', $data, function($message) use ($data) {
              $message->from($data['email']);
              $message->to("hkk710@gmail.com");
              $message->subject("Thanks for your valuable feedback");
          });
          Session::flash('success', 'Your email was successfully send');
          return redirect()->route('home');
    }
}
