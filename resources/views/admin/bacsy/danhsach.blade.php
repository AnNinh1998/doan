@extends('admin_show.index')
 @section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bác sỹ
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
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên khoa</th>
                                <th>Tên bác sỹ</th>
                                <th>Số điện thoại</th>
                                <th>Mô tả</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bacsy as $t1)
                            <tr class="odd gradeX">
                                <td>{{$t1->id}}</td>
                                <td>{{$t1->khoa->faculty_name}}</td>
                                <td>
                                    <p>{{$t1->doctor_name}}</p>
                                    <img src="uploads/doctor/{{$t1->doctor_image}}" width="100px" >
                                </td>
                                <td>{{$t1->doctor_phone}}</td>
                                <td>{{$t1->doctor_description}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/bacsy/xoa/{{$t1->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/bacsy/sua/{{$t1->id}}">Edit</a></td>
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