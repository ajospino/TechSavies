<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function home()
    {
        $data = [];
        $user = Auth::user()->type;
        $data["type"] = $user;
        if($user != NULL){
            if($user == 1){
                return view('home.index')->with("data",$data);
            }else{
                return view('home.indexUser');
            }
        }else{
            return view('home.indexUser');
        }
    }
}
