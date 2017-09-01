<header class="right-menu">
  <div class="container-fluid">
    <div class="row">
      <!-- Start Navigation -->
      <nav class="navbar navbar-default  bootsnav">
        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
          <ul>
            <li class="cart-toggler">
              <a href="#.">
                <i class="fa fa-shopping-cart"></i>
                <span class="badge">3</span>
              </a>
            </li>
            <li class="search"><a href="#."><i class="fa fa-search"></i></a>
            </li>
            {{--
            <li class="side-menu"><a href="#."><i class="fa fa-bars"></i></a></li>
            --}}
            
          </ul>
        </div>

        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="/" style="font-weight: 800; font-size: 23px;">CLOUD STORE</a>
        </div>
        <!-- End Header Navigation -->

        <div class="collapse navbar-collapse" id="navbar-menu">
            
            <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                @foreach ($nodes as $node)
                    <li><a href="{{ url($node->getUrl()) }}">{{ $node->title }}</a>
                @endforeach
            </ul>
            
          {{-- 
          <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
            <li class="dropdown active">
              <a href="#." class="dropdown-toggle" data-toggle="dropdown">Home</a>
              <ul class="dropdown-menu">
                <li><a href="index.html">Home V1</a>
                </li>
                <li><a href="index2.html">Home V2</a>
                </li>
                <li><a href="index3.html">Home V3</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#." class="dropdown-toggle" data-toggle="dropdown">Products</a>
              <ul class="dropdown-menu">
                <li><a href="grid.html">Grid Default</a>
                </li>
                <li><a href="grid_list.html">Grid Lists</a>
                </li>
                <li><a href="grid_sidebar.html">Grid Sidebar</a>
                </li>
                <li><a href="list_sidebar.html">Lists Sidebar</a>
                </li>
              </ul>
            </li>
            <li><a href="#.">collection</a>
            </li>
            <li class="dropdown megamenu-fw">
              <a href="#." class="dropdown-toggle" data-toggle="dropdown">pages</a>
              <ul class="dropdown-menu megamenu-content" role="menu">
                <li>
                  <div class="row">
                    <div class="col-menu col-md-3">
                      <h5 class="title heading_border">Blog</h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="blog1.html">Blog Two Cols</a>
                          </li>
                          <li><a href="blog2.html">Blog Three Cols</a>
                          </li>
                          <li><a href="blog_post.html">Blog Posts</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-3">
                      <h5 class="title heading_border">Products Elements</h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="checkout.html">Product Chekouts</a>
                          </li>
                          <li><a href="product_detail.html">Products Details</a>
                          </li>
                          <li><a href="cart.html">Shopping Cart</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-3">
                      <h5 class="title heading_border">Theme Elements</h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="#.">Skills</a>
                          </li>
                          <li><a href="#.">Team & Testimonials</a>
                          </li>
                          <li><a href="404.html">Errors</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-3">
                      <div class="content">
                        <img src="images/mega-menu.png" alt="menu" class="img-responsive">
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li><a href="#.">about us</a>
            </li>
            <li><a href="contact.html">contact us</a>
            </li>
          </ul>
          --}}
        </div>

        {{--
        <!-- Start Side Menu -->
        <div class="side">
          <a href="#." class="close-side"><i class="fa fa-times"></i></a>
          <div class="widget">
            <h6 class="title">Custom Pages</h6>
            <ul class="link">
              <li><a href="#.">About</a>
              </li>
              <li><a href="#.">Services</a>
              </li>
              <li><a href="#.">Blog</a>
              </li>
              <li><a href="#.">Portfolio</a>
              </li>
              <li><a href="#.">Contact</a>
              </li>
            </ul>
          </div>
          <div class="widget">
            <h6 class="title">Additional Links</h6>
            <ul class="link">
              <li><a href="#.">Retina Homepage</a>
              </li>
              <li><a href="#.">New Page Examples</a>
              </li>
              <li><a href="#.">Parallax Sections</a>
              </li>
              <li><a href="#.">Shortcode Central</a>
              </li>
              <li><a href="#.">Ultimate Font Collection</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Side Menu -->
         --}}
         
        <!--Search Bar-->
        <div class="search-toggle">
          <div class="top-search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
            </div>
          </div>
        </div>
        <ul class="cart-list">
          <li>
            <a href="#." class="photo"><img src="images/hover-cart.jpg" class="cart-thumb" alt="" />
            </a>
            <h6><a href="#.">Sacrificial Chair Design </a></h6>
            <p>Qty: 2 <span class="price">$170.00</span>
            </p>
          </li>
          <li class="total clearfix">
            <div class="pull-right"><strong>Shipping</strong>: $5.00</div>
            <div class="pull-left"><strong>Total</strong>: $173.00</div>
          </li>
          <li class="cart-btn">
            <a href="#." class="active">VIEW CART </a>
            <a href="#.">CHECKOUT </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
