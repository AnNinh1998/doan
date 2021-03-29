<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Bacsy;
use App\Models\Khoa;
class BacsyController extends Controller
{
    public function getDanhsach(){
        $bacsy=Bacsy::all();
        return view('admin.bacsy.danhsach',['bacsy'=>$bacsy]);
    }
    
    public function getThem(){
        $khoa=Khoa::all();
        return view('admin.bacsy.them',['khoa'=>$khoa]);
    }

    public function postThem(Request $request){
       $this->validate($request,
       [
            'faculty_name'=>'required',
            'doctor_name'=>'required',
            'doctor_phone'=>'required|unique:doctors,doctor_phone',
            'doctor_description'=>'required'
       ],
       [
            'faculty_name.required'=>'Khoa khám không được bỏ trống',
            'doctor_name.required'=>'Tên của bác sỹ không được bỏ trống',
            'doctor_phone.required'=>'Số điện thoại của bác sỹ không được bỏ trống',
            'doctor_phone.unique'=>'Số điện thoại này đã được sử dụng trước đó',
            'doctor_description.required'=>'Mô tả bác sỹ không được bỏ trống',
       ]);
       $bacsy=new Bacsy;
       $bacsy->id_faculty=$request->faculty_name;
       $bacsy->doctor_name=$request->doctor_name;
       $bacsy->doctor_phone=$request->doctor_phone;
       $bacsy->doctor_description=$request->doctor_description;
       if($request->hasFile('image')){
           $file=$request->file('image');
           $name=$file->getClientOriginalName();
           $hinh=rand(0,99).".".$name;
           $file->move("uploads/doctor",$hinh);
           $bacsy->doctor_image=$hinh;
       }
       else{
           $bacsy->doctor_image="";
       }
       $bacsy->save();
       return redirect('admin/bacsy/them')->with('thongbao','Thêm bác sỹ thành công');
    }
    public function getSua($id){
        $khoa=Khoa::all();
        $bacsy=Bacsy::find($id);
        return view('admin.bacsy.sua',['bacsy'=>$bacsy,'khoa'=>$khoa]);
    }
    public function postSua(Request $request,$id){
        $bacsy=Bacsy::find($id);
        $this->validate($request,
       [
            'faculty_name'=>'required',
            'doctor_name'=>'required',
            'doctor_phone'=>'required',
            'doctor_description'=>'required'
       ],
       [
            'faculty_name.required'=>'Khoa khám không được bỏ trống',
            'doctor_name.required'=>'Tên của bác sỹ không được bỏ trống',
            'doctor_phone.required'=>'Số điện thoại của bác sỹ không được bỏ trống',
            'doctor_description.required'=>'Mô tả bác sỹ không được bỏ trống'
       ]);
       $bacsy->id_faculty=$request->faculty_name;
       $bacsy->doctor_name=$request->doctor_name;
       $bacsy->doctor_phone=$request->doctor_phone;
       $bacsy->doctor_description=$request->doctor_description;
       if($request->hasFile('image')){
           $file=$request->file('image');
           $name=$file->getClientOriginalName();
           $hinh=rand(0,99).".".$name;
           $file->move("uploads/doctor",$hinh);
          $bacsy->doctor_image=$hinh;
       }
       else{
           $bacsy->doctor_image="";
       }
       $bacsy->save();
       return redirect('admin/bacsy/danhsach')->with('thongbao','Cập nhật thông tin bác sỹ thành công');
    }
    public function getXoa($id){
        $bacsy=Bacsy::find($id);
        $bacsy->delete();
        return redirect('admin/bacsy/danhsach')->with('thongbao','Xóa thành công');
    }
}
