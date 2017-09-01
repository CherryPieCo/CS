
<section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            @foreach ($node->getBreadcrumbs(true) as $crumb)
                @if ($loop->last)
                    <li class="active">{{ $crumb->title }}</li>
                @else
                    <li><a href="{{ url($crumb->getUrl()) }}">{{ $crumb->title }}</a></li>
                @endif
            @endforeach
            
          </ul>
        </div>
      </div>
    </div>
</section>
