@extends('layouts.main')


@section('content')

    @include('catalog.partials.breadcrumbs')
    
  <section id="cart" class="padding_bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
            
            
          <div id="slider_product" class="cbp margintop40">
              @foreach ($product->getImages() as $image)
                <div class="cbp-item">
                  <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                      <img src="{{ asset($image->src()) }}" alt="">
                    </div>
                  </div>
                </div>
              @endforeach
          </div>
          
          @if ($product->getImagesCount() > 1)
          <div id="js-pagination-slider">
              @foreach ($product->getImages() as $image)
                <div class="cbp-pagination-item {{ $loop->first ? 'cbp-pagination-active' : '' }}">
                  <img src="{{ asset($image->src()) }}" alt="">
                </div>
              @endforeach
          </div>
          @endif
          
          
        </div>
        <div class="col-sm-6">
          <div class="detail_pro margintop40">
            <h4 class="bottom30">{{ $product->title }}</h4>
            <p class="bottom30">{{ nl2br($product->description) }}</p>
            <ul class="review_list marginbottom15">
              <li><img src="/images/star.png" alt="star">
              </li>
              <li><a href="#.">10 review(s) </a>
              </li>
              <li><a href="#.">Add your review</a>
              </li>
            </ul>
            <h2 class="price marginbottom15">{{ $product->price }} ₴</h2>

            {{-- 
            <form class="cart-form">
              <div class="form-group">
                <label for="city">
                  Size *
                </label>
                <label class="select form-control">
                  <select name="country" id="city">
                    <option selected>- Please select -</option>
                    <option>Canada</option>
                    <option>Chilli</option>
                    <option>France</option>
                  </select>
                </label>
              </div>
              <div class="form-group">
                <label for="city">
                  Color *
                </label>
                <label class="select form-control">
                  <select name="country" id="color">
                    <option selected>- Please select -</option>
                    <option>Canada</option>
                    <option>Chilli</option>
                    <option>France</option>
                  </select>
                </label>
              </div>
              <p class="text-danger">Repuired Fiields *</p>
            </form>
            <form class="cart-form">
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="quan">
                      Quantity *
                    </label>
                  </div>
                  <div class="col-sm-6">
                    <label class="select form-control">
                      <select name="country" id="selection">
                        <option selected>- 01 -</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                      </select>
                    </label>
                  </div>
                </div>
              </div>
            </form>
            --}}
            
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
          
          <hr>
          @include('catalog.partials.product_tabs')
        </div>
      </div>
    </div>
  </section>

    
    
@endsection