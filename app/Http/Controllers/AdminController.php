<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index(){
        return view('adminlogin');
    }
    public function showdashboard(){
        return view('admin_show.index');
    }
    public function dashboard(Request $request){
        $email=$request->email;
        $password=md5($request->password);
        $result=DB::table('login')->where('email',$email)->where('password',$password)->first();
        return view('admin_show.index');
    }
    public function logout(){
       return view('adminlogin');
    }
}
