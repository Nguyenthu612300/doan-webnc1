@extends('layouts.master')

@section('content')
{{-- @foreach ($products as $product) --}}
{{-- @if () --}}

<section>
    <div class="containerr row box-detail">
        <div class="left col-md-5">
            <div class="main_image">
                <img src="../uploads/{{$product->image}}" class="slide">
            </div>
        </div>
        <div class="right col-md-5">
            <h3>{{$product->name}}</h3>
            <h4> {{number_format($product->price)}} <small>VNĐ</small></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. </p>
            <h5>Color-Rose Gold</h5>
            <div class="color flex1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <h5>Number</h5>
            <div class="buttons_added row">
                <!-- <input class="minus is-form" type="button" value="-"> -->
                <input aria-label="quantity" class="input-qty col-md-2" max="Số tối đa" min="Số tối thiểu" name="" type="number" value="1" >
                <!-- <input class="plus is-form" type="button" value="+"> -->
                <a href="../product/{{$product->id}}}" class="btn btn-primary addtocart col-md-6">Add to cart</a>
            </div>
            
        </div>
    </div>
</section>
{{-- @endif --}}
{{-- @endforeach --}}
@include('layouts.inc.footer')

@endsection