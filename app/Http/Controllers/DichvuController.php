<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khoa;
use App\Models\Dichvu;
use App\Exports\ExcelExport;
use Excel;


class DichvuController extends Controller
{
    public function getDanhsach(){
        $dichvu=Dichvu::all();
        return view('admin.dichvu.danhsach',['dichvu'=>$dichvu]);
    }
    public function getThem(){
        $khoa=Khoa::all();
        return view('admin.dichvu.them',['khoa'=>$khoa]);
    }
    public function postThem(Request $request){
        $this->validate($request,
        [
             'service_name'=>'required|unique:service,service_name',
             'service_description'=>'required',
             'service_price'=>'required',
        ],
        [
             'service_name.required'=>'Tên dịch vụ không được bỏ trống',
             'service_name.unique'=>'Tên dịch vụ này đã được sử dụng trước đó',
             'service_description.required'=>'Mô tả dịch vụ không được bỏ trống',
             'service_price.required'=>'Giá dịch vụ không được bỏ trống'
          ]);
        $dichvu=new Dichvu;
        $dichvu->id_faculty=$request->faculty_name;
        $dichvu->service_name=$request->service_name;
        $dichvu->service_description=$request->service_description;
        $dichvu->service_price=$request->service_price;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $hinh=rand(0,99).".".$name;
            $file->move("uploads/service",$hinh);
            $dichvu->service_image=$hinh;
        }
        else{
            $dichvu->service_image="";
        }
        $dichvu->save();
        return redirect('admin/dichvu/them')->with('thongbao','Thêm dịch vụ thành công');
    }
    public function getSua($id){
        $khoa=Khoa::all();
        $dichvu=Dichvu::find($id);
        return view('admin.dichvu.sua',['dichvu'=>$dichvu,'khoa'=>$khoa]);
    }
    public function postSua(Request $request,$id){
        $dichvu=Dichvu::find($id);
        $this->validate($request,
        [
             'service_name'=>'required|unique:service,service_name',
             'service_description'=>'required',
             'service_price'=>'required',
        ],
        [
             'service_name.required'=>'Tên dịch vụ không được bỏ trống',
             'service_name.unique'=>'Tên dịch vụ này đã được sử dụng trước đó',
             'service_description.required'=>'Mô tả dịch vụ không được bỏ trống',
             'service_price.required'=>'Giá dịch vụ không được bỏ trống'
        ]);
        $dichvu->id_faculty=$request->faculty_name;
        $dichvu->service_name=$request->service_name;
        $dichvu->service_description=$request->service_description;
        $dichvu->service_price=$request->service_price;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $hinh=rand(0,99).".".$name;
            $file->move("uploads/service",$hinh);
            $dichvu->service_image=$hinh;
        }
        else{
            $dichvu->service_image="";
        }
        $dichvu->save();
       return redirect('admin/dichvu/danhsach')->with('thongbao','Cập nhật thông tin dịch vụ thành công');
    }
    
    public function getXoa($id){
        $dichvu=Dichvu::find($id);
        $dichvu->delete();
        return redirect('admin/dichvu/danhsach')->with('thongbao','Xóa thành công');
    }

    public function detail_Service($product_id){
        $khoa=DB::table('faculty')->limit(3)->get();
        $dichvu=DB::table('service')->paginate(6);
        $bacsy=DB::table('doctors')->paginate(3);
        return view('dichvu.detailService')->with('khoa',$khoa)->with('dichvu',$dichvu)->with('bacsy',$bacsy);
    }
    public function export_csv(){
        return Excel::download(new ExportExcel , 'service.xlsx');
    }
}
