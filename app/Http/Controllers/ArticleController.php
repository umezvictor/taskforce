<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;//my model
use App\Http\Requests; //uncensored
use App\Http\Resources\Article as ArticleResource; 
//an alias (ArticleResource) was used because the 
//model is also named Article. can be any name you choose 


class ArticleController extends Controller
{

    /*you get all this methods: store, destroy, etc automatically created with this command

    php artisan make:controller VictorController --resource

    the command also creates the respective request types for each of the methods, eg 
    delete, get, post, which will be used in the routes

*/
   
    public function index()
    {
        //GET all the ARTICLES
        $articles = Article::paginate(15);//display 15 records per page

        //return colletion of articles
        return ArticleResource::collection($articles);

    }

   
    /*
    updating and creating new articles uses the same 'store' 
    method but different request types.
    
    creating uses a post request
    updating uses a put request

    you can choose the request type from your postman application
    */
    public function store(Request $request)
    {
        //create a new article
        //this can also be an if statement
        //it checks if it is a put method, and creates a new article if it is not
        $article = $request->isMethod('put') ? Article::findOrFail
        ($request->article_id) : new Article;

        $article->id = $request->input('article_id');
        $article->title = $request->input('title');
        $article->body = $request->input('body');


        if($article->save()){
            return new ArticleResource($article);
        }
    }

    
    public function show($id)
    {
        //get a single article
        $article = Article::findOrFail($id);
        //this id is part of the route parameters

        return new ArticleResource($article);

    }

   
   
    public function destroy($id)
    {
        //delete an article
       
         $article = Article::findOrFail($id);
         if($article->delete()){
            return new ArticleResource($article);
         }
 
        
    }
}
