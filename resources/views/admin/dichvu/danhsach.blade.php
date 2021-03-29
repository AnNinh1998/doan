@extends('admin_show.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dịch vụ
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
                        <th>Tên dịch vụ</th>
                        <th>Mô tả</th>
                        <th>Giá dịch vụ</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dichvu as $t1)
                    <tr class="odd gradeX">
                        <td>{{$t1->id}}</td>
                        <td>{{$t1->khoa->faculty_name}}</td>
                        <td align="center">
                            <p>{{$t1->service_name}}</p>
                            <img src="uploads/service/{{$t1->service_image}}" width="100px">
                        </td>
                        <td>{{$t1->service_description}}</td>
                        <td>{{$t1->service_price}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/dichvu/xoa/{{$t1->id}}">
                                Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                href="admin/dichvu/sua/{{$t1->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <form action="admin/dichvu/danhsach"  method="POST" >
                @csrf
                <input type="submit" value="Export Excel" name="export_csv" class="btn btn-success">
            </form> 

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection