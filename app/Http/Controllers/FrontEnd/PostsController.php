<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
   public function frontend(){

    return "Hi Route FrontEnd ";
   }
   

      public function posts(){

         return view ('FrontEnd.Posts');

      }
      public function save(){

         return view ('FrontEnd.Save');

      }   
}   

