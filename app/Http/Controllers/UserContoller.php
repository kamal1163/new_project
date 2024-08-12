<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserContoller extends Controller
{
     public function index()
     {
        return view('home');
     }
    public function contact()
    {
        $url = url("contact");
       return view('contact',compact('url'));
    }

    public function blog()
    {
       return view('blog');
    }
    public function view()
    {
        $user_data = User::all();
        return view('index',compact('user_data'));
    }
}
