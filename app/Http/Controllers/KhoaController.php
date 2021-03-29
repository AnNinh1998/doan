<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  DB;
use App\Models\Khoa;
class KhoaController extends Controller
{
    public function getDanhsach()
    {
        $khoa=Khoa::all();
        return view('admin.khoa.danhsach',['khoa'=>$khoa]);
    }

    public function getThem(){
        return view('admin.khoa.them');
    }

    public function postThem(Request $request){
        $this->validate($request,
        [
            'faculty_name'=>'required|unique:faculty,faculty_name',
            'faculty_phone'=>'required|unique:faculty,faculty_phone',
        ],
        [
            'faculty_name.required'=>'Chưa nhập tên khoa',
            'faculty_name.unique'=>'Khoa đã tồn tại trước đó',
            'faculty_phone.required'=>'Chưa nhập số điện thoại của khoa',
            'faculty_phone.unique'=>'Số điện thoại này đã được dùng',
        ]);
        $khoa=new Khoa;
        $khoa->faculty_name=$request->faculty_name;
        $khoa->faculty_phone=$request->faculty_phone;
        $khoa->save();
        return redirect('admin/khoa/them')->with('thongbao','Thêm mới khoa thành công');
    }

    public function getSua($id){

    }

    public function postSua(Request $request,$id){

    }

    public function getXoa($id){

    }
}
