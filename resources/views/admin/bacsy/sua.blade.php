@extends('admin_show.index')

@section('content')

<div id="page-wrapper">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-12">
                       <h1 class="page-header">Bác sỹ
                           <small>{{$bacsy->doctor_name}}</small>
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
                       <form action="admin/bacsy/sua/{{$bacsy->id}}" method="POST" enctype="multipart/form-data">
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                           <div class="form-group">
                               <label for="exampleInputPassword">Khoa khám</label>
                               <select name="faculty_name" class="form-control input-sm m-bot15" id="PC">
                                   @foreach($khoa as $k)
                                        <option 
                                        @if($bacsy->khoa->id==$k->id)
                                            {{"selected"}}
                                        @endif
                                        value="{{$k->id}}">{{$k->faculty_name}}</option>
                                   @endforeach
                               </select>
                            </div>
                            <div class="form-group">
                               <label>Tên Bác sỹ</label>
                               <input class="form-control" name="doctor_name" placeholder="Nhập tên Bác sỹ" value="{{$bacsy->doctor_name}}"}  />
                           </div>
                           <div class="form-group">
                               <label>Hình ảnh đại diện</label>
                               <p><img src="uploads/doctor/{{$bacsy->doctor_image}}" alt="" width="200px"></p>
                               <input type="file"  class="form-control" name="image"/>
                           </div>
                           <div class="form-group">
                               <label>Số điện thoại</label>
                               <input class="form-control" name="doctor_phone" placeholder="Nhập số điện thoại" value="{{$bacsy->doctor_phone}}"  />
                           </div>
                           <div class="form-group">
                               <label>Mô tả</label>
                               <input class="form-control" name="doctor_description" placeholder="Nhập số điện thoại" value="{{$bacsy->doctor_description}}"  />
                           </div>
                           <button type="submit" class="btn btn-default">Cập nhật thông tin</button>
                      </form>
                   </div>
               </div>
               <!-- /.row -->
           </div>
           <!-- /.container-fluid -->
</div>

 @endsection
