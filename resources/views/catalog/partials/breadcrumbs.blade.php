
<section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            @foreach ($node->getBreadcrumbs(true) as $crumb)
                <li><a href="{{ url($crumb->getUrl()) }}">{{ $crumb->title }}</a></li>
            @endforeach
            <li class="active">{{ $product->title }}</li>
          </ul>
        </div>
      </div>
    </div>
</section>
