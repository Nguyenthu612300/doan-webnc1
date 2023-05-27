@extends('layouts.master')

@section('content')


    



 <section>
    <div class="container my-5">
       
      <header class="mb-4">
        <h3>{{$category->name}}</h3>
      </header>
   
      <div class="row">
       @foreach ($products as $product)
       @if ($product->category_id == $category->id && $product->status == true)
       <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <img src="../uploads/{{$product->image}}" class="card-img-top" style="aspect-ratio: 1 / 1; width:80%; height:80%" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{$product->name}}</h5>
              <p class="card-text">${{$product->price}}</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover" style="width:20%; height:90%">
                   <img src="{{asset('frontend/icon/heart.jpg')}}" style="width:80%" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
       @endif
          
       @endforeach
       
      </div>
    </div>
 </section>
 @include('layouts.inc.footer')
@endsection
