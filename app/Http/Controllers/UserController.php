<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        $data = []; //to be sent to the view

        $user = User::findOrFail($id);

        $data["title"] = $user->getName();
        $data["user"] = $user;
        return view('admin.show')->with("data", $data);
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create User";
        $data["users"] = User::all();

        return view('admin.create')->with("data",$data);
    }
    
    public function list()
    {
        $data = []; //to be sent to the view
        $data["title"] = "List Users";
        //$data["users"] = User::all();
        $data["users"] = User::orderBy('id','DESC')->get();

        return view('admin.list')->with("data",$data);

    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "address" => "required",
            "password" => "required",
        ]);
        User::create($request->only(["name","username","email","password","address"]));
        return back()->with('success','Elemento creado satisfactoriamente');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.list');
    }
}