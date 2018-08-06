<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;//for stuff like this $file = Input::file('file');
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Models\Tickets;
use DB;

class TicketsController extends Controller
{
    public function index(){
        return view ('tickets');
    }

    public function store(Request $request){
       // $file = $request->only('file'); gives the file only
      // $file = Input::file('file'); //

      //myfile is the name attribute of the file input field in the form
      //prevent user from submitting without uploading a file
      if($request->hasFile('myfile')){
       // $request->file('myfile');//file path
        //$file->store('uploads');//another way to upload file

        //this works as well
        //  if(Storage::putFile('public', $request->file('myfile'))){
        //      //get the original name of the file
        //     $filename = $request->myfile->getClientOriginalName();
        //     //return $path;
        //  }

        //get the original file name
        $filename = $request->myfile->getClientOriginalName();

        //upload it and have it saved with the original file 
        //name to avoid laravel from hashing it
        $request->myfile->storeAs('public', $filename);





        //anoter method to upload file
        
        //return Storage::putFile('public/vicimages', $request->file('myfile'));//create custom directory
        //return $request->myfile->path();//return /displays the file path

         //return $request->myfile->storeAs('public', 'victorpic.jpg');//specify custom file name
         //this will prevent the filename from being hashed
       
       
       //  return $request->myfile->extension();//return /displays the file extension
        //return $request->file->store('public');//stores the file in public folder in storage/app/public
      }else{
        $filename = 'no file'; //default file name that will be saved in database if no file is uploaded
      }
    
//save other form fields
      Tickets::create([
          'department' => $request->input('department'),
          'fullname' => $request->input('fullname'),
          'email' => $request->input('email'),
          'priority' => $request->input('priority'),
          'subject' => $request->input('subject'),
          'message' => $request->input('message'),
          'myfilename' => $filename,
          'status' => $request->input('status')
        
      ]);
        return back();

        //dd($file);
    }

//run php artisan storage:link to link the taskforce\public directory to the storage\public directoty


public function show(){


//display ticket records in table
$tickets = Tickets::all();
return view('category.mytickets', compact('tickets'));






   // return Storage::files('public'); //returns an array of all files in this directory
   // return Storage::allFiles('public');//returns all files in directory and subdirectory
    // Storage::makeDirectory('public/victorboss');//creates a new directory
    // if(Storage::deleteDirectory('public/victor')){
    //     echo 'directory deleted';
    // }

   // display uploaded image in browser
   //run php artisan storage:link to link the taskforce\public directory to the storage\public directoty
//without this command, you cant view the image in the browser
  //$img = Storage::url('victorpic.jpg');
  //return " <img src='".$img."'>";


  //get image size
  //return Storage::size('public/victorpic.jpg');
//echo '<br \>';
  //get last modofied datetime
  //return Storage::lastModified('public/victorpic.jpg');

  //copy file to storage\app folder
  // Storage::copy('public/victorpic.jpg', 'victorpic.jpg');

  //move file
//   if(Storage::move('public/victorpic.jpg', 'victorpic.jpg')){
//       return 'moved';
//   }


//get image raw data in binary format
//return Storage::get('victorpic.jpg');

// //save image raw data as normal image
// $rawImg = Storage::get('victorpic.jpg');
// if(Storage::put('newvictor,jpg', $rawImg)){
//     return 'image saved as normal image';
// }



// //delete two files at once
// Storage::delete('victorpic.jpg', 'second file path');

// //delete a file
// if(Storage::delete('victorpic.jpg')){
//     return 'file deleted';
// }
 
}

//delete ticket
public function delete($id){
  DB::table('complaints')->where('id', $id)->delete();
return redirect('/show');
}
    
public function downloadFile($file_name){

  
  $file_path = public_path('storage/'.$file_name);
    return response()->download($file_path);
    
  return redirect('/show');
}
}
