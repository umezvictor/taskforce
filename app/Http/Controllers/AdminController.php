<?php
namespace App\Http\Controllers;
use Auth;  //used for authenication eg login
use Illuminate\Support\Str; //to enable str::random function
//Illuminate\Support\Facades\Auth;
use App\Models\User;// models was also reset to this path in the config directory
use Illuminate\Http\Request;
use Mail; //for email sending
use App\Mail\verifyEmail; //mailable created by me from cmd prompt



class AdminController extends Controller{

    public function getAdminPage(){
        return view('myadmin.master'); //master is in myadmin directory
    }
}
