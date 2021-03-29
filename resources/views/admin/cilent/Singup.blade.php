@extends('welcome')
@section('content')
<div class="singup">
    <div class="content">
        <form action="admin/cilent/Singup" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="col-sm-3">
                   
                </div>
                <div class="col-sm-6">
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
                    <h2 style="text-align: center;color: orange;">Đăng ký trực tuyến</h2>
                    <div class="form-group">
                        <label for="exampleInputPassword">Khoa khám</label>
                        <select name="faculty_name" class="form-control input-sm m-bot15" id="PC">
                            @foreach($khoa as $k)
                            <option value="{{$k->id}}">{{$k->faculty_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Bác sỹ</label>
                        <select name="doctor_name" class="form-control input-sm m-bot15" id="PC">
                            @foreach($bacsy as $k)
                            <option value="{{$k->id}}">{{$k->doctor_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Họ tên <span style="color: red;">(*)</span></label>
                        <input class="form-control" type="text" name="customer_name" placeholder="Xin mời nhập tên" />
                    </div>
                    <div class="form-group">
                        <label>Email <span style="color: red;">(*)</span></label>
                        <input class="form-control" type="email" name="customer_email"
                            placeholder="Xin mời nhập thông tin email" />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ <span style="color: red;">(*)</span></label>
                        <input class="form-control" type="text" name="customer_address"
                            placeholder="Xin mời nhập địa chỉ" />
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại <span style="color: red;">(*)</span></label>
                        <input class="form-control" type="text" name="customer_phone"
                            placeholder="Xin mời nhập số điện thoại" />
                    </div>
                    <div class="form-group">
                        <label>Ngày đến khám <span style="color: red;">(*)</span></label>
                        <input class="form-control" name="customer_time" type="date" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Đăng ký trực tuyến</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--features_items-->
@endsection