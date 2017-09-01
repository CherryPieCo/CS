@extends('layouts.main')


@section('content')
    
    
<div class="wrapper">
    @include('pages.partials.breadcrumbs')
<div class="container">
    <div class="row">
      <div class="col-sm-12">
        <article class="blog_item">
          
          <div class="blog_text">
            <h5 class="uppercase marginbottom15">{{ $node->title }}</h5> 
            {!! $node->content !!}
          </div>
          
        </article>
      </div>
      
    </div>
  </div>
</div>
    
@endsection