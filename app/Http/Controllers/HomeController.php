<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $khoa=DB::table('faculty')->limit(3)->get();
        $dichvu=DB::table('service')->paginate(6);
        $bacsy=DB::table('doctors')->paginate(3);
        return view('pages.index')->with('khoa',$khoa)->with('dichvu',$dichvu)->with('bacsy',$bacsy);
    }
}
