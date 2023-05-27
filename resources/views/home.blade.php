@extends('layouts.master')

@section('content')

{{-- <div class="bg-primary text-white py-5">
    <div class="container py-5">
    <h1>
       Category & <br />
       New Product in our store
    </h1>
    <p>
       Trendy Products, Factory Prices, Excellent Service
    </p>
    <button type="button" class="btn btn-outline-light">
       Learn more
    </button>
    <button type="button" class="btn btn-light shadow-0 text-primary pt-2 border border-white">
       <span class="pt-1">Purchase now</span>
    </button>
    </div>
 </div> --}}



 
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-inner"  style="height: 410px; width: 1349px;">
     <div class="carousel-item active">
       <img src="{{asset('frontend/icon/banner5.png')}}" class="d-block w-100" alt="...">
     </div>
     <div class="carousel-item">
       <img src="{{asset('frontend/icon/banner6.png')}}" class="d-block w-100" alt="...">
     </div>
     
   </div>
 </div>


 <section>
    <div class="container my-5">
       @foreach ($categories as $category )
          
       
      <header class="mb-4">
        <h3>{{$category->name}}</h3>
      </header>
   
      <div class="row">
       @foreach ($products as $product)
       @if ($product->category_id == $category->id && $product->status == true)
       <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <a href="{{ route('product.detail', ['id' => $product->id]) }}">
               <img src="../uploads/{{$product->image}}" class="card-img-top" style="aspect-ratio: 1 / 1; width:80%; height:80%" />
            </a>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{$product->name}}</h5>
              <p class="card-text">${{$product->price}}</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="../product/{{$product->id}}" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover" style="width:20%; height:90%">
                   <img src="{{asset('frontend/icon/heart.jpg')}}" style="width:80%" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
       @endif
          
       @endforeach
       
       @endforeach
      </div>
    </div>
 </section>


 <!-- Blog -->
 <section class="mt-5 mb-4">
   <div class="container text-dark">
     <header class="mb-4">
       <h3>Blog posts</h3>
     </header>
 
     <div class="row">
       <div class="col-lg-3 col-md-6 col-sm-6 col-12">
         <article>
           <a href="#" class="img-fluid">
             <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/1.webp" style="object-fit: cover;" height="160" />
           </a>
           <div class="mt-2 text-muted small d-block mb-1">
             <span>
               <i class="fa fa-calendar-alt fa-sm"></i>
               23.12.2022
             </span>
             <a href="#"><h6 class="text-dark">How to promote brands</h6></a>
             <p>When you enter into any new area of science, you almost reach</p>
           </div>
         </article>
       </div>
       <!-- col.// -->
       <div class="col-lg-3 col-md-6 col-sm-6 col-12">
         <article>
           <a href="#" class="img-fluid">
             <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/2.webp" style="object-fit: cover;" height="160" />
           </a>
           <div class="mt-2 text-muted small d-block mb-1">
             <span>
               <i class="fa fa-calendar-alt fa-sm"></i>
               13.12.2022
             </span>
             <a href="#"><h6 class="text-dark">How we handle shipping</h6></a>
             <p>When you enter into any new area of science, you almost reach</p>
           </div>
         </article>
       </div>
       <!-- col.// -->
       <div class="col-lg-3 col-md-6 col-sm-6 col-12">
         <article>
           <a href="#" class="img-fluid">
             <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/3.webp" style="object-fit: cover;" height="160" />
           </a>
           <div class="mt-2 text-muted small d-block mb-1">
             <span>
               <i class="fa fa-calendar-alt fa-sm"></i>
               25.11.2022
             </span>
             <a href="#"><h6 class="text-dark">How to promote brands</h6></a>
             <p>When you enter into any new area of science, you almost reach</p>
           </div>
         </article>
       </div>
       <!-- col.// -->
       <div class="col-lg-3 col-md-6 col-sm-6 col-12">
         <article>
           <a href="#" class="img-fluid">
             <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/4.webp" style="object-fit: cover;" height="160" />
           </a>
           <div class="mt-2 text-muted small d-block mb-1">
             <span>
               <i class="fa fa-calendar-alt fa-sm"></i>
               03.09.2022
             </span>
             <a href="#"><h6 class="text-dark">Success story of sellers</h6></a>
             <p>When you enter into any new area of science, you almost reach</p>
           </div>
         </article>
       </div>
     </div>
   </div>
 </section>
 <!-- Blog -->

 @include('layouts.inc.footer')
@endsection
