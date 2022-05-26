<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){
        return view("home");
    }
    public function view(){
        return view("view");
    }
    public function create(){
        return view("insert");
    }
}
