@extends('admin_show.index')

@section('content')

<div id="page-wrapper">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-12">
                       <h1 class="page-header">Dịch vụ
                           <small>Thêm mới dịch vụ</small>
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
                       <form action="admin/dichvu/them" method="POST" enctype="multipart/form-data">
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                           <div class="form-group">
                               <label for="exampleInputPassword">Khoa</label>
                               <select name="faculty_name" class="form-control input-sm m-bot15" id="PC">
                                   @foreach($khoa as $k)
                                        <option value="{{$k->id}}">{{$k->faculty_name}}</option>
                                   @endforeach
                               </select>
                            </div>
                            <div class="form-group">
                               <label>Tên dịch vụ</label>
                               <input class="form-control" name="service_name" placeholder="Nhập tên dịch vụ"  />
                           </div>
                           <div class="form-group">
                               <label>Hình ảnh dịch vụ</label>
                               <input type="file"  class="form-control" name="image"/>
                           </div>
                           <div class="form-group">
                               <label>Mô tả</label>
                               <textarea class="form-control" name="service_description"></textarea>
                           </div>
                           <div class="form-group">
                               <label>Giá dịch vụ</label>
                               <input class="form-control" name="service_price" placeholder="Nhập giá dịch vụ"  />
                           </div>
                           <button type="submit" class="btn btn-default">Thêm mới dịch vụ</button>
                      </form>
                   </div>
               </div>
               <!-- /.row -->
           </div>
           <!-- /.container-fluid -->
</div>
 @endsection
