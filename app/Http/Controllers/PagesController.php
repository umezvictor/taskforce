<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; //supports email sending
//use Session; use this if you use Session flash

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     

    
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getContact()
    {
        return view('contact');
    }

    public function postContact(Request $request)
    {
        //validate the inputs
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10'
        ]);

        //capture data to be sent
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message,
            'recipient' => 'victorblaze2010@gmail.com'
            //'message' = something cant b used cos it is a laravel reserved variable
        );
//        syntax:  Mail::send('the view', data to be sentto view, function(){
// //contains info like to, from, headers
//         });
//mails.contact is the mail content view. it is what the recipient will see
        Mail::send('mails.contact', $data, function($mymessage) use ($data){
            $mymessage->from($data['email']);
            $mymessage->to($data['recipient']);
            $mymessage->subject($data['subject']);
        });
        //flash a message

return redirect('contact')->with('msgstatus', 'your email was sent');


    }

}
