@extends('layouts.user')
   
@section('content')
<div class="site-section" id="products-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">List of Articles</h3>
            <h2 class="section-title mb-3">My Articles</h2>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p> -->
          </div>
        </div>
        <div class="row">
          @foreach($articles as $a)
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img  src="{{ url('/thumbnail/'.$a->thumbnail) }}" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#">{{$a->title}}</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                </div>
                <p class="mb-4">{{$a->excerpt}}</p>
                <div>
                  <a href="/detail/{{$a->id}}" class="btn btn-primary">View</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
<div class="justify-content-center d-flex">{{ $articles->links() }}</div>
      </div>
    </div>
@endsection