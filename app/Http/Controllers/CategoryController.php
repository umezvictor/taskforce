<?php
//this controler was created using php artisan create:controller CategoryController -r
//the -r creates all the necessary functions automatically
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch records to display in table
        $categories = Category::all();
        //pass data to the view simultaneos
        return view('category.index', compact('categories')); //categories is the variable above
       // 
    }

    

    
    public function store(Request $request)
    {
        //create new record
        Category::create($request->all());
        return back();//reloads current page
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //$request->id is similar to $_POST[id]
        //send the id of the category to be updated
        $category = Category::findOrFail($request->id);
        $category->update($request->all());
        return back();
     //   dd($request->all()); 
    }

    //delete record
    public function destroy(Request $request)
    {
       $category = Category::findOrFail($request->id);
       $category->delete();
       return back();
    }
}
