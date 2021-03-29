@extends('admin_show.index')

@section('content')

<div id="page-wrapper">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-12">
                       <h1 class="page-header">Bác sỹ
                           <small>Thêm mới bác sỹ</small>
                       </h1>
                   </div>
                   <!-- /.col-lg-12 -->
                   <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                               <div class="alert alert-danger">
                                   @foreach($errors->all() as $err)
                                       {{$err}}<br>
                                   @endforeach
                               </div>
                        @endif
                        @if(session('thongbao'))
                           <div class="alert alert-success">
                               {{session('thongbao')}}
                           </div>
                        @endif
                       <form action="admin/bacsy/them" method="POST" enctype="multipart/form-data">
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                           <div class="form-group">
                               <label for="exampleInputPassword">Khoa khám</label>
                               <select name="faculty_name" class="form-control input-sm m-bot15" id="PC">
                                   @foreach($khoa as $k)
                                        <option value="{{$k->id}}">{{$k->faculty_name}}</option>
                                   @endforeach
                               </select>
                            </div>
                            <div class="form-group">
                               <label>Tên Bác sỹ</label>
                               <input class="form-control" name="doctor_name" placeholder="Nhập tên Bác sỹ"  />
                           </div>
                           <div class="form-group">
                               <label>Hình ảnh đại diện</label>
                               <input type="file"  class="form-control" name="image"/>
                           </div>
                           <div class="form-group">
                               <label>Số điện thoại</label>
                               <input class="form-control" name="doctor_phone" placeholder="Nhập số điện thoại"  />
                           </div>
                           <div class="form-group">
                               <label>Mô tả</label>
                               <textarea class="form-control" name="doctor_description"></textarea>
                           </div>
                           <button type="submit" class="btn btn-default">Thêm mới bác sỹ</button>
                      </form>
                   </div>
               </div>
               <!-- /.row -->
           </div>
           <!-- /.container-fluid -->
</div>

 @endsection
