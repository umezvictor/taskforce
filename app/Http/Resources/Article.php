<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Article extends Resource
{
    /**
     * This is the resource file that determinees what api users will get
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request); gives the entire records by default

        //to specify the data to be returned use lines below

        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }


    //additional data not in the database can also be sent as part of the api response
    public function with($request){
        return [ 
            'version' => '1.0.0',
            'author_name' => 'Victor Umezuruike',
            'author_website' => url('http://v-teck.com.ng')
        ];
    }
}
