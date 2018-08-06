<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model

{
    protected $table = 'complaints';

    protected $fillable = ['department',
                     'fullname', 'email', 
                    'priority', 'subject', 
                    'message', 'myfilename', 'status'
                ];

   
                
}
