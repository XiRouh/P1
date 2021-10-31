<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\UserController;
use App\Models\userNodel;

class userController extends Controller
{
    public function insertform()
    {
        return view('signup');
    }

    public function insert(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $password = $request->input('password');
        DB::insert('insert into customauth (name,email,phone,password) values(?,?,?,?)',[$name,$email,$phone,$password]);
        echo "You have successfull sign up.<br/>";
        echo '<a href = "/viewdata">Click Here</a> to view data.';
    }

}



?>