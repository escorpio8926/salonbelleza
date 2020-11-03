<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
       public function us(){
           return view('productos_servicios');
    }

      public function contacto(){
           return view('contact');
    }



      

      
}
