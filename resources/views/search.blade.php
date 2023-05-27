@extends('layouts.master')

@section('content')

    <!-- Products -->
    <div class="container">

        <header class="mb-4">
            <h3 class="title-category">Kết Quả Tìm Kiếm </h3>
        </header>

        <div class="row justify-content-around">
            @foreach ($productss as $product)
                <div id="product-item" class="col-lg-2 col-md-5 col-sm-5 col-9">
                    <div class="item">
                        <div class="image">
                            <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="link-product-detail">
                                <img src="../uploads/{{ $product->image }}" alt="" style="width: 100%">
                            </a>
                        </div>
                        <div class="content">
                            <div class="name-product">
                                <a class="product-link-detail" href="" style="text-decoration: none">
                                    <h5 class="card-text mb-2">{{ $product->name }}</h5>
                                </a>
                            </div>
                            <div class="price-product">
                                <h5 class="card-title mb-2 text-center">{{ number_format($product->price) }} VNĐ</h5>
                            </div>
                        </div>
                        <div class="addcart">
                            <a href="../product/{{ $product->id }}" class="btn btn-primary shadow-0 me-1" >Add To Cart</a>
                            {{-- <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i
                                    class="fas fa-heart fa-lg px-1 text-secondary"></i> --}}
                                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover" style="width:20%; height:90%">
                                        <img src="{{asset('frontend/icon/heart.jpg')}}" style="width:85%" alt="">
                                     </a>
                                    
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <!-- Products -->
@endsection
