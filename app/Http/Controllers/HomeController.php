<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class HomeController extends Controller
{
    public function index(){
      

    $data = [
        "movies" => Movie::all()
    ];
    //var_dump($data);
    return view("home", $data);

    
    }
}
