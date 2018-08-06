<?php

namespace App\Http\Controllers;
use Auth;  //used for authenication eg login
use Illuminate\Support\Str; //to enable str::random function
//Illuminate\Support\Facades\Auth;
use App\Models\User;// models was also reset to this path in the config directory
use Illuminate\Http\Request;
use Mail; //for email sending
use App\Mail\verifyEmail; //mailable created by me from cmd prompt


class UserController extends Controller
{
    //display the signup page
    public function getSignup(){
        return view('signup');
    }

    //submits data from the signup form into the database
    public function postSignup(Request $request){
    //     request()->validate([
    //         'username' => 'required|unique:users|alpha_dash|max:30',
    //   'email' => 'required|unique:users|email|max:255',
    //   'password' => 'required|min:6',
    //     ]);
    $this->validate($request, [
        
        //parameters definition
        //email is required, should be unique in users table, must be a valid email, with max character of 255 
        'username' => 'required|unique:users|alpha_dash|max:20',
        'email' => 'required|unique:users|email|max:255',
        'password' => 'required|min:6',
        'firstname' => 'required|alpha|max:30',
        'lastname' => 'required|alpha|max:30',
        'phone' => 'required|numeric',
        'skills' => 'required',
        'state' => 'required|alpha|max:20',
        'town' => 'required|alpha',
       
        
   ]);
//assign the create function to $user variable
// Session::flash('status', 'Registered, please verify your email to activate your account');
    $user = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'phone' => $request->input('phone'),
            'skills' => $request->input('skills'), 
            'state' => $request->input('state'),
            'town' => $request->input('town'),
            'verify_token' => Str::random(40),       
        ]);

 return redirect('signup')->with('status', 'We have sent you a verification email . 
 Check your inbox now to activate your account');    
    //send verfication email after submission
$thisUser = User::findOrFail($user->id); //fetch user by id
$this->sendEmail($thisUser);
return $user;
    }

    //this function is currently not in use in this project
    public function sendEmail($thisUser){
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
        //verifyEmail is a mailable created from cmd prompt using php artisan make:mail verifyEmail
        //find it in mail folder inside app directory
    }

    //this function is currently not in use in this project
    //update user profile after veriffication link is clicked
    public function sendEmailDone($email, $verifyToken){
$user = User::where(['email' => $email, 'verify_token' => $verifyToken])->first();
if($user){
    return User::where(['email' => $email, 'verify_token' => $verifyToken])
->update(['status' => '1', 'verify_token' => NULL]);
}else{
    return 'user not found';
}
  
    }

    public function getSignin(){
        return view('signin');
    }

    //authenticate login
    public function postSignin(Request $request){
       $this->validate($request, [
           'username' => 'required',
           'password' => 'required',

       ]); 

       
   //if credentials not valid
       if(!Auth::attempt($request->only(['username', 'password']), $request->has('remember'))){
           //failure
           return redirect()->back()->with('status', 'invalid username or password');
       }else{
           //success
           return redirect('admin')->with('login-status', 'welcome user');
           //redirect('profile') is the url, but it displays userprofile.profile in views directory
       }

    }

    public function signout(){
        Auth::logout();
        return redirect('signin');
    }
}
