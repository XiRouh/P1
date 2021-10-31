<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    //
    public function index(){
        $data = DB::select('select * from customauth');
        return view('/viewdata',['data'=>$data]);
        }


            public function show($id) {
                $id = DB::select('select * from customauth where id = ?',[$id]);
      return view('edit',['id'=>$id]);
             }
    
             public function edit(Request $request,$id) {
                $name = $request->input('name');
                $phone = $request->input('phone');
                $email = $request->input('email');
                $password = $request->input('password');
        DB::update('update customauth set name = ?,phone = ?,email = ?,password =? where id = ?',[$name,$phone,$email,$password,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/viewdata">Click Here</a> to go back.';
             }

         public function delete($id) {
            DB::delete('delete from customauth where id = ?',[$id]);
            echo "Record deleted successfully.<br/>";
            echo '<a href = "/viewdata">Click Here</a> to go back.';
         }


}
