@extends('layouts.main')


@section('content')
    <section class="grid padding">
    <h3 class="hidden">hidden</h3>
    <div class="container">
      <div class="col-md-12 col-sm-12">
        <div class="shop-grid-controls">
          <div class="view-button grid active bottom30">
            <i class="fa fa-th-large"></i>
          </div>
          <div class="view-button list bottom30">
            <i class="fa fa-align-justify"></i>
          </div>
          <div class="entry bottom30">
            <form class="grid-form">
              <div class="form-group">
                <div class="select form-control">
                  <select name="country" id="sorting">
                    <option selected>Defaul sorting</option>
                    <option>Defaul sorting</option>
                    <option>Defaul sorting</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        
        
        <div class="row shop-grid grid-view">
            
          @foreach ($products as $product) 
          <div class="col-md-4 col-sm-6">
            <div class="product_wrap heading_space">
              <div class="image">
                <div class="tag">
                  <div class="tag-btn">
                    <span class="uppercase text-center">New</span>
                  </div>
                </div>
                <a href="{{ $product->getUrl() }}">
                  <img src="{{ asset($product->getFirstImage()->src()) }}" alt="Product" class="img-responsive">
                </a>
              </div>
              <div class="product_desc">
                <p class="title">{{ $product->title }}</p>
                <div class="list_content">
                  <h4 class="bottom30">{{ $product->title }}</h4>
                  <p>{{ $product->description }}</p>
                  <ul class="review_list bottomtop30">
                    <li><img alt="star" src="images/star.png">
                    </li>
                    <li><a href="#.">10 review(s) </a>
                    </li>
                    <li><a href="#.">Add your review</a>
                    </li>
                  </ul>
                  <h4 class="price bottom30">{{ $product->price }} ₴ &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></h4>
                  <div class="cart-buttons">
                    <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                    <a class="icons" href="#.">
                      <i class="fa fa-heart-o"></i>
                    </a>
                    <a class="icons" href="#.">
                      <i class="fa fa-exchange"></i>
                    </a>
                  </div>
                </div>
                <span class="price">{{ $product->price }} ₴</span>
                <a class="fancybox" href="{{ asset($product->getFirstImage()->src()) }}" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
              {{ $products->links() }}
            {{-- 
            <ul class="pager">
              <li><a href="#."><i class="fa fa-angle-left"></i></a>
              </li>
              <li class="active"><a href="#.">01</a>
              </li>
              <li><a href="#.">02</a>
              </li>
              <li><a href="#.">03</a>
              </li>
              <li><a href="#."><i class="fa fa-angle-right"></i></a>
              </li>
            </ul>
            --}}
          </div>
          <div class="col-md-6 col-sm-6 text-right">
            <h5 class="result uppercase">Showing 1-12 of 20 relults</h5>
          </div>
        </div>
      </div>

    </div>
  </section>

@endsection