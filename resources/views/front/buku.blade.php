@extends('layouts/layouts')

@section('konten')

@foreach ($res_product as $item)
<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
	<div class="product-item bg-light mb-4">
		<div class="product-img position-relative overflow-hidden">
			<img class="img-fluid w-100" src="{{url('ui/img/product/'.$item->fileimages)}}" alt="">
			<div class="product-action">
				<a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
				<a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
				<a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
				<a class="btn btn-outline-dark btn-square" href="{{url('fproducts/'.$item->id)}}"><i class="fa fa-search"></i></a>
			</div>
		</div>
		<div class="text-center py-4">
			<a class="h6 text-decoration-none text-truncate" href="">{{$item->product_name}}</a>
			<div class="d-flex align-items-center justify-content-center mt-2">
				<h5>{{$item->product_price_currency}} {{$item->product_price}} .-</h5>
				{{-- <h6 class="text-muted ml-2"><del>{{$item->product_price}}</del></h6> --}}
			</div>
			<div class="d-flex align-items-center justify-content-center mb-1 d-none">
				<small class="fa fa-star text-primary mr-1"></small>
				<small class="fa fa-star text-primary mr-1"></small>
				<small class="fa fa-star text-primary mr-1"></small>
				<small class="fa fa-star text-primary mr-1"></small>
				<small class="fa fa-star text-primary mr-1"></small>
				<small>(99)</small>
			</div>
		</div>
	</div>
</div>
@endforeach

@endsection