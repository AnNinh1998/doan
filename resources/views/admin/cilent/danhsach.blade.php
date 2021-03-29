@extends('admin_show.index')
 @section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Khách hàng
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                     @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên khoa</th>
                                <th>Tên bác sỹ</th>
                                <th>Tên khách hàng</th>
                                <th>Email khách hàng</th>
                                <th>Địa chỉ khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Ngày đến khám</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($khachhang as $t1)
                            <tr class="odd gradeX">
                                <td>{{$t1->id}}</td>
                                <td>{{$t1->khoa->faculty_name}}</td>
                                <td>{{$t1->bacsy->doctor_name}}</td>
                                <td>{{$t1->customer_name}}</td>
                                <td>{{$t1->customer_email}}</td>
                                <td>{{$t1->customer_address}}</td>
                                <td>{{$t1->customer_phone}}</td>
                                <td>{{$t1->customer_time}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection