@extends('welcome')
@section('content')
<div class="features_items">
	<!--features_items-->
	<h2 class="title text-center" style="font-size:17px;">Dịch vụ khám hiện có</h2>
	@foreach($dichvu as $key => $pro)
	<a href="{{URL::to('/chi-tiet-dich-vu/'.$pro->id)}}">
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="{{URL::to('uploads/service/'.$pro->service_image)}}" alt=""
						style="height: 200px;width: 100%;" />
					<h2>{{number_format($pro->service_price).' '.'VNĐ'}}</h2>
					<p>{{$pro->service_name}}</p>
				</div>
			</div>
		</div>
	</div>
	</a>
	@endforeach
</div>
<!-- <div class="row">{{$dichvu->links()}}</div> -->
<!--features_items-->
<div class="recommended_items">
	<!--recommended_items-->
	<h2 class="title text-center" style="font-size:17px;">Bác sỹ của chúng tôi</h2>

	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			@foreach($bacsy as $key => $pro)
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{URL::to('uploads/doctor/'.$pro->doctor_image)}}" alt="" style="height: 150px;width: 100%;"/>
							<h2>{{$pro->doctor_name}}</h2>
							<p>{{$pro->doctor_description}}</p>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<div class="row">{{$bacsy->links()}}</div>
@endsection