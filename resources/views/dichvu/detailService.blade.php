@extends('welcome')
@section('content')
@foreach($dichvu as $key => $pro)
<div class="product-details">
    <!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <img src="images/product-details/1.jpg" alt="" />
            <h3>ZOOM</h3>
        </div>
        <div id="similar-product" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                </div>

            </div>
        </div>
    </div>
</div>
@endforeach
@endsection