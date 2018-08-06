<?php
//this controler was created using php artisan create:controller CategoryController -r
//the -r creates all the necessary functions automatically
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Services;
use DB;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //show the services page
       return view('services');
    }

    

    
    public function storeBooking(Request $request)
    {
        //save bookings. Ajax was used in this case
        //to give response to ajax we use the json
        // //another way to save records is to create an object of the class
        $service = new Services();

        $service->title = $request->title;
        $service->name = $request->name;
        $service->email = $request->email;
        $service->phone = $request->phone;

        $service->save();
        //return response()->json($service);
        return 'record saved';
        
        //give feedback to ajax
       // 
        
        //give feedback to ajax
        //return response()->json(['success'=>'your booking was successful']);

    //   if($request->ajax()){
    //       $service = Services::create($request->all());
    //       return response($service);
    //   }


    }

   
    public function displayBookings()
    {
        return view('category.serviceorders');
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request)
    {
       
    }

    //delete record
    public function destroy(Request $request)
    {
      
    }

    //search for services
    public function search(Request $request){

        if($request->ajax()){
            $output = "";
            $services = DB::table('services')->where('title','LIKE','%'.$request->search.'%')
            ->orWhere('name','LIKE','%'.$request->search.'%')->get();

            if($services){
               foreach($services as $key => $service){
                   $output .= '<tr>'.
                   '<td>'.$service->id.'</td>'.
                   '<td>'.$service->title.'</td>'.
                   '<td>'.$service->name.'</td>'.
                   '<td>'.$service->email.'</td>'.
                   '<td>'.$service->phone.'</td>'.
                   '</tr>';
               }
            }

            return Response ($output);
                                                 
         }
        //else{
        //     return Response()->json(['no'=>'Record not found']);
        // }
    }
}
