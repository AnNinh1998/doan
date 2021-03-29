<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khoa;
use App\Models\Bacsy;
use App\Models\Khachhang;


class KhachhangController extends Controller
{
    public function getDanhsach(){
        $khachhang=Khachhang::all();
        return view('admin.cilent.danhsach',['khachhang'=>$khachhang]);
    }

    public function getDangky(){
        $khoa=Khoa::all();
        $bacsy=Bacsy::all();
        return view('admin.cilent.Singup',['khoa'=>$khoa],['bacsy'=>$bacsy]);
    }
    public function postDangky(Request $request){
        $this->validate($request,
        [
            'customer_name'=>'required',
            'customer_email'=>'required|email|unique:customer,customer_email',
            'customer_address'=>'required',
            'customer_phone'=>'required|unique:customer,customer_phone'
        ],
        [
            'customer_name.required'=>'Vui lòng nhập tên',
            'customer_email.required'=>'Vui lòng nhập địa chỉ email',
            'customer_email.email'=>'Email không đúng định dạng',
            'customer_email.unique'=>'Email này đã được sử dụng',
            'customer_address.required'=>'Vui lòng nhập địa chỉ sinh sống',
            'customer_phone.required'=>'Vui lòng nhập số điện thoại',
            'customer_phone.unique'=>'Số điện thoại này đã được sử dụng',
        ]);
        $kh= new Khachhang;
        $kh->faculty_id=$request->faculty_name;
        $kh->doctor_id=$request->doctor_name;
        $kh->customer_name=$request->customer_name;
        $kh->customer_email=$request->customer_email;
        $kh->customer_address=$request->customer_address;
        $kh->customer_phone=$request->customer_phone;
        $kh->customer_time=$request->customer_time;
        $kh->save();
        return redirect('admin/cilent/Singup')->with('thongbao','Đăng ký thành công !');
    }
}
