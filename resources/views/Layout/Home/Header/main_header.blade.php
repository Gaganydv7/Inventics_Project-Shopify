@php 
  $flag=0;
  
@endphp
<header class="hdr-wrap">
  <div class="hdr-content hdr-content-sticky">
    <div class="container">
      <div class="row">
        <div class="col-auto show-mobile">
          <!-- Menu Toggle -->
          <div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
          <!-- /Menu Toggle -->
        </div>
        <div class="col-auto hdr-logo">
          <a href="##" class="logo"><img srcset="{{asset('images/skins/medical/logo.png')}} , {{asset('images/skins/medical/logo.png')}}" alt="Logo"></a>
        </div>
        <!--navigation-->
        <div class="hdr-nav hide-mobile nav-holder-s">
        </div>
        <!--//navigation-->
        <div class="hdr-links-wrap col-auto ml-auto">
          <div class="hdr-inline-link">
            <!-- Header Search -->
            <div class="search_container_desktop">
              <div class="dropdn dropdn_search dropdn_fullwidth">
                <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
                <div class="dropdn-content">
                  <div class="container">
                    <form method="get" action="#" class="search search-off-popular">
                      <input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
                      <button type="submit" class="search-button"><i class="icon-search"></i></button>
                      <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Header Search -->
            <!-- Header Wishlist -->
            <div class="dropdn dropdn_wishlist">
              <a href="{{route('wishlist')}}" class="dropdn-link only-icon wishlist-link ">
                <i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span class="wishlist-qty">3</span>
              </a>
            </div>
            <!-- /Header Wishlist -->
            <!-- Header Account -->
            <div class="dropdn dropdn_account dropdn_fullheight">
              <a href="#" class="dropdn-link js-dropdn-link js-dropdn-link only-icon" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
            </div>
            <!-- /Header Account -->
            <div class="dropdn dropdn_fullheight minicart">
              <a href="#" class="dropdn-link js-dropdn-link minicart-link only-icon" data-panel="#dropdnMinicart">
                <i class="icon-basket"></i>
                <span class="minicart-qty">3</span>
                <span class="minicart-total hide-mobile">$34.99</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hdr">
    <div class="hdr-content">
      <div class="container">
        <div class="row">
          <div class="col-auto show-mobile">
            <!-- Menu Toggle -->
            <div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
            <!-- /Menu Toggle -->
          </div>
          <div class="col-auto hdr-logo">
            <a href="##" class="logo"><img srcset="{{asset('images/skins/medical/logo.png , images/skins/medical/logo.png')}}" alt="Logo"></a>
          </div>
          <!--navigation-->
          <div class="hdr-nav hide-mobile nav-holder justify-content-center">
            <!--mmenu-->
            <ul class="mmenu mmenu-js">
            
            @foreach($categories as $cat)
                  @php
                    $subcat=array();
                    $subcatslug=array();
                    foreach($sub_categories as $sub_cat)
                    {
                      if($sub_cat->cat_sub_name==$cat->name)
                      {
                        array_push($subcat,$sub_cat->name);
                        array_push($subcatslug,$sub_cat->slug);
                      }
                    }
                  @endphp
                <li class="mmenu-item--simple"><a href="#" ><span>{{$cat->name}}</span></a>
                <div class="mmenu-submenu d-flex">
                  <ul class="submenu-list mt-0">
                  @for($i=0;$i<count($subcat)/2;$i++)
                      <li><a href="{{route('sidebar',$subcatslug[$i])}}">{{$subcat[$i]}}</a></li>
                    @endfor

                    @if(count($subcat)>1)
                  </ul>
                  <ul class="submenu-list mt-0">

                    @for($i=count($subcat)/2;$i<count($subcat);$i++)
                        <li><a href="{{route('sidebar',$subcatslug[$i])}}">{{$subcat[$i]}}</a></li>
                      @endfor
                  </ul>
                  @endif
                </div>
              </li>
              @endforeach
              <li class="mmenu-item--simple"><a href="#" class="no-uppercase">Pages</a>
                <div class="mmenu-submenu">
                  <ul class="submenu-list">
                    <li><a href="{{asset('page1/'.$cat_product[$i]->product_sub_cat.'/'.$cat_product[$i]->product_cat.'/'.$cat_product[$i]->slug)}}">Product page</a>
                      <ul>
                        <li><a href="{{asset('page1/'.$cat_product[$i]->product_sub_cat.'/'.$cat_product[$i]->product_cat.'/'.$cat_product[$i]->slug)}}">Product page variant 1<span class="menu-label menu-label--color3">Popular</span></a></li>
                        <li><a href="{{route('page2')}}">Product page variant 2</a></li>
                        <li><a href="{{route('page3')}}">Product page variant 3</a></li>
                        <li><a href="{{route('page4')}}">Product page variant 4</a></li>
                        <li><a href="{{route('page5')}}">Product page variant 5</a></li>
                        <li><a href="{{route('page6')}}">Product page variant 6</a></li>
                        <li><a href="{{route('page7')}}">Product page variant 7</a></li>
                      </ul>
                    </li> 
                    <li><a href="{{route('sidebar',$subcatslug[rand(0,count($subcat)-1)])}}">Category page</a>
                      <ul>
                        <li><a href="{{route('sidebar',$subcatslug[rand(0,count($subcat)-1)])}}">Left sidebar filters</a></li>
                        <li><a href="{{route('close')}}">Closed filters</a></li>
                        <li><a href="{{route('horizontal')}}">Horizontal filters</a></li>
                        <li><a href="{{route('listing')}}">Listing View</a></li>
                        <li><a href="{{route('empty')}}">Empty category</a></li>
                      </ul>
                    </li>
                    <li><a href="##">Cart & Checkout</a>
                      <ul>
                        <li><a href="##">Cart Page</a></li>
                        <li><a href="{{route('emptycart')}}">Empty cart</a></li>
                        <li><a href="{{route('varient1')}}">Checkout variant 1</a></li>
                        <li><a href="{{route('varient2')}}">Checkout variant 2</a></li>
                        <li><a href="{{route('varient3')}}">Checkout variant 3</a></li>
                      </ul>
                    </li>
                    <li><a href="##">Account</a>
                      <ul>
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('create')}}">Create account</a></li>
                        <li><a href="{{route('details')}}">Account details</a></li>
                        <li><a href="{{route('address')}}">Account addresses</a></li>
                        <li><a href="{{route('order')}}">Order History</a></li>
                        <li><a href="{{route('wishlist')}}">Wishlist</a></li>
                      </ul>
                    </li>
                    <li><a href="{{route('rightside')}}">Blog</a>
                      <ul>
                        <li><a href="{{route('rightside')}}">Right sidebar</a></li>
                        <li><a href="{{route('leftside')}}">Left sidebar</a></li>
                        <li><a href="{{route('noside')}}">No sidebar</a></li>
                        <li><a href="{{route('stickyside')}}">Sticky sidebar</a></li>
                        <li><a href="{{route('grid')}}">Grid</a></li>
                        <li><a href="##">Blog post</a></li>
                      </ul>
                    </li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    <li><a href="{{route('faq')}}">Faq</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                    <li><a href="{{route('404_page')}}">404 Page</a></li>
                    <li><a href="{{route('typography')}}">Typography</a></li>
                    <li><a href="{{route('soon')}}" target="_blank">Coming soon</a></li>
                  </ul>
                </div>
              </li>
              <li class="mmenu-item--mega"><a href="collections.html" class="no-uppercase"><span>Medical</span></a>
                <div class="mmenu-submenu mmenu-submenu--has-bottom">
                  <div class="mmenu-submenu-inside">
                    <div class="container">
                      <div class="mmenu-left width-25">
                        <div class="mmenu-bnr-wrap">
                          <a href="# " class="image-hover-scale image-container w-100" style="padding-bottom: 102.91%">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="images/skins/medical/menu/mmenu-bnr-01.png" class="lazyload fade-up" alt="">
                          </a>
                        </div>
                        <h3 class="submenu-title"><a href="##">Don't forget to buy</a></h3>
                      </div>
                      <div class="mmenu-cols column-4">
                        <div class="mmenu-col">
                          <h3 class="submenu-title"><a href="##">Collections</a></h3>
                          <ul class="submenu-list">
                            <li><a href="##">Martins d'Art 2020/21<span class="submenu-link-txt">Available in boutiques from June 2019</span></a></li>
                            <li><a href="##">Spring-Summer 2021<span class="submenu-link-txt">Available in boutiques from March 2019</span></a></li>
                            <li><a href="##">Spring-Summer 2021 Pre-Collection<span class="submenu-link-txt">In boutiques</span></a></li>
                            <li><a href="##">Cruise 2020/21<span class="submenu-link-txt">In boutiques</span></a></li>
                            <li><a href="##">Fall-Winter 2020/21</a></li>
                          </ul>
                        </div>
                        <div class="mmenu-col">
                          <h3 class="submenu-title"><a href="##">Ready-to-wear</a></h3>
                          <ul class="submenu-list">
                            <li><a href="##" class="active">Jackets</a>
                              <ul class="sub-level">
                                <li><a href="##">Bomber Jackets</a></li>
                                <li><a href="##">Biker Jacket</a></li>
                                <li><a href="##">Trucker Jacket</a></li>
                                <li><a href="##">Denim Jackets</a></li>
                                <li><a href="##">Blouson Jacket<span class="menu-label">SALE</span></a></li>
                                <li><a href="##">Overcoat</a></li>
                                <li><a href="##">Trench Coat</a></li>
                              </ul>
                            </li>
                            <li><a href="##">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
                            <li><a href="##">Blouses & Tops</a></li>
                            <li><a href="##">Cardigans & Pullovers</a></li>
                            <li><a href="##">Skirts</a></li>
                            <li><a href="##">Pants & Shorts</a></li>
                            <li><a href="##">Outerwear</a></li>
                            <li><a href="##">Swimwear</a></li>
                          </ul>
                        </div>
                        <div class="mmenu-col">
                          <h3 class="submenu-title"><a href="##">Accessories</a></h3>
                          <ul class="submenu-list">
                            <li><a href="##">Jackets</a></li>
                            <li><a href="##">Dresses</a></li>
                            <li><a href="##">Blouses & Tops</a></li>
                            <li><a href="##">Cardigans & Pullovers</a></li>
                            <li><a href="##">Skirts<span class="menu-label">SALE</span></a></li>
                            <li><a href="##">Pants & Shorts</a></li>
                            <li><a href="##">Outerwear</a></li>
                          </ul>
                        </div>
                        <div class="mmenu-col">
                          <h3 class="submenu-title"><a href="##">Brands</a></h3>
                          <ul class="submenu-list">
                            <li><a href="##">Jackets</a></li>
                            <li><a href="##">Dresses</a></li>
                            <li><a href="##">Blouses & Tops</a></li>
                            <li><a href="##">Cardigans & Pullovers</a></li>
                            <li><a href="##">Skirts<span class="menu-label menu-label--color1">SALE</span></a></li>
                            <li><a href="##">Pants & Shorts</a></li>
                            <li><a href="##">Outerwear</a></li>
                          </ul>
                        </div>
                        <div class="mmenu-bottom justify-content-center">
                          <a href="#"><i class="icon-fox icon--lg"></i><b>FOXshop News</b><i class="icon-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            
            </ul>
            <!--/mmenu-->
          </div>
          <!--//navigation-->
          <div class="hdr-links-wrap col-auto ml-auto">
            <div class="hdr-inline-link">
              <!-- Header Search -->
              <div class="search_container_desktop">
                <div class="dropdn dropdn_search dropdn_fullwidth">
                  <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
                  <div class="dropdn-content">
                    <div class="container">
                      <form method="get" action="#" class="search search-off-popular">
                        <input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
                        <button type="submit" class="search-button"><i class="icon-search"></i></button>
                        <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Header Search -->
              <!-- Header Wishlist -->
              <div class="dropdn dropdn_wishlist">
                <a href="{{route('wishlist')}}" class="dropdn-link only-icon wishlist-link ">
                  <i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span class="wishlist-qty">3</span>
                </a>
              </div>
              <!-- /Header Wishlist -->
              <!-- Header Account -->
              <div class="dropdn dropdn_account dropdn_fullheight">
                <a href="#" class="dropdn-link js-dropdn-link js-dropdn-link only-icon" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
              </div>
              <!-- /Header Account -->
              <div class="dropdn dropdn_fullheight minicart">
                <a href="#" class="dropdn-link js-dropdn-link minicart-link only-icon" data-panel="#dropdnMinicart">
                  <i class="icon-basket"></i>
                  <span class="minicart-qty">3</span>
                  <span class="minicart-total hide-mobile">$34.99</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="header-side-panel">
  <!-- Mobile Menu -->
  <div class="mobilemenu js-push-mbmenu">
    <div class="mobilemenu-content">
      <div class="mobilemenu-close mobilemenu-toggle">Close</div>
      <div class="mobilemenu-scroll">
        <div class="mobilemenu-search"></div>
        <div class="nav-wrapper show-menu">
          <div class="nav-toggle">
            <span class="nav-back"><i class="icon-angle-left"></i></span>
            <span class="nav-title"></span>
            <a href="#" class="nav-viewall">view all</a>
          </div>
          <ul class="nav nav-level-1">
            <li><a href="##">Layouts<span class="menu-label menu-label--color1">New</span><span class="arrow"><i class="icon-angle-right"></i></span></a>
              <ul class="nav-level-2">
                <li><a href="##">Fashion (Default) Skin</a></li>
                <li><a href="index-sport.html">Sport Skin</a></li>
                <li><a href="index-helloween.html">Halloween Skin</a></li>
                <li><a href="index-medical.html}">Medical Skin</a></li>
                <li><a href="index-food.html">Food Market Skin</a></li>
                <li><a href="index-cosmetics.html">Cosmetics Skin</a></li>
                <li><a href="index-fishing.html">Fishing Skin</a></li>
                <li><a href="#">Books Skin<span class="menu-label menu-label--color1">Coming Soon</span></a></li>
                <li><a href="#">Electronics Skin<span class="menu-label menu-label--color2">Coming Soon</span></a></li>
                <li><a href="#">Games Skin<span class="menu-label menu-label--color3">Coming Soon</span></a></li>
                <li><a href="#">Vaping Skin<span class="menu-label">Coming Soon</span></a></li>
                <li><a href="index-02.html">Home page 2</a></li>
                <li><a href="index-03.html">Home page 3</a></li>
                <li><a href="index-04.html">Home page 4</a></li>
                <li><a href="index-05.html">Home page 5</a></li>
                <li><a href="index-06.html">Home page 6</a></li>
                <li><a href="index-07.html">Home page 7</a></li>
                <li><a href="index-08.html">Home page 8</a></li>
                <li><a href="index-09.html">Home page 9</a></li>
                <li><a href="index-10.html">Home page 10</a></li>
                <li><a href="index-rtl.html">Home page RTL</a></li>
              </ul>
            </li>
            <li><a href="#">Pages<span class="arrow"><i class="icon-angle-right"></i></span></a>
              <ul class="nav-level-2">
                <li><a href="# ">Product page<span class="arrow"><i class="icon-angle-right"></i></span></a>
                  <ul class="nav-level-3">
                    <li><a href="# ">Product page variant 1<span class="menu-label menu-label--color3">Popular</span></a></li>
                    <li><a href="{{route('page2')}}">Product page variant 2</a></li>
                    <li><a href="{{route('page3')}}">Product page variant 3</a></li>
                    <li><a href="{{route('page4')}}">Product page variant 4</a></li>
                    <li><a href="{{route('page5')}}">Product page variant 5</a></li>
                    <li><a href="{{route('page6')}}">Product page variant 6</a></li>
                    <li><a href="{{route('page7')}}">Product page variant 7</a></li>
                  </ul>
                </li>
                <li><a href="{{route('sidebar',$subcatslug[rand(0,count($subcat)-1)])}}">Category page<span class="arrow"><i class="icon-angle-right"></i></span></a>
                  <ul class="nav-level-3">
                    <li><a href="{{route('sidebar',$subcatslug[rand(0,count($subcat)-1)])}}">Left sidebar filters</a></li>
                    <li><a href="{{route('close')}}">Closed filters</a></li>
                    <li><a href="{{route('horizontal')}}">Horizontal filters</a></li>
                    <li><a href="{{route('listing')}}">Listing View</a></li>
                    <li><a href="{{route('empty')}}">Empty category</a></li>
                  </ul>
                </li>
                <li><a href="##">Cart & Checkout<span class="arrow"><i class="icon-angle-right"></i></span></a>
                  <ul class="nav-level-3">
                    <li><a href="##">Cart Page</a></li>
                    <li><a href="{{route('emptycart')}}">Empty cart</a></li>
                    <li><a href="{{route('varient1')}}">Checkout variant 1</a></li>
                    <li><a href="{{route('varient2')}}">Checkout variant 2</a></li>
                    <li><a href="{{route('varient3')}}">Checkout variant 3</a></li>
                  </ul>
                </li>
                <li><a href="##">Account<span class="arrow"><i class="icon-angle-right"></i></span></a>
                  <ul class="nav-level-3">
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('create')}}">Create account</a></li>
                    <li><a href="{{route('details')}}">Account details</a></li>
                    <li><a href="{{route('address')}}">Account addresses</a></li>
                    <li><a href="{{route('order')}}">Order History</a></li>
                    <li><a href="{{route('wishlist')}}">Wishlist</a></li>
                  </ul>
                </li>
                <li><a href="{{route('rightside')}}">Blog<span class="arrow"><i class="icon-angle-right"></i></span></a>
                  <ul class="nav-level-3">
                    <li><a href="{{route('rightside')}}">Right sidebar</a></li>
                    <li><a href="{{route('leftside')}}">Left sidebar</a></li>
                    <li><a href="{{route('noside')}}">No sidebar</a></li>
                    <li><a href="{{route('stickyside')}}">Sticky sidebar</a></li>
                    <li><a href="{{route('grid')}}">Grid</a></li>
                    <li><a href="##">Blog post</a></li>
                  </ul>
                </li>
                <li><a href="{{route('gallery')}}">Gallery</a></li>
                <li><a href="{{route('faq')}}">Faq</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
                <li><a href="{{route('404_page')}}">404 Page</a></li>
                <li><a href="{{route('typography')}}">Typography</a></li>
                <li><a href="{{route('soon')}}" target="_blank">Coming soon</a></li>
              </ul>
            </li>
            <li><a href="##">New Arrivals<span class="arrow"><i class="icon-angle-right"></i></span></a>
              <ul class="nav-level-2">
                <li><a href="##">Shoes<span class="arrow"><i class="icon-angle-right"></i></span></a>
                  <ul class="nav-level-3">
                    <li><a href="##">Heels</a></li>
                    <li><a href="##">Boots</a></li>
                    <li><a href="##">Flats</a></li>
                    <li><a href="##">Sneakers &amp; Athletic</a></li>
                    <li><a href="##">Clogs &amp; Mules</a></li>
                  </ul>
                </li>
                <li><a href="##">Tops<span class="arrow"><i class="icon-angle-right"></i></span></a>
                  <ul class="nav-level-3">
                    <li><a href="##">Dresses</a></li>
                    <li><a href="##">Shirts &amp; Tops</a></li>
                    <li><a href="##">Coats &amp; Outerwear</a></li>
                    <li><a href="##">Sweaters</a></li>
                  </ul>
                </li>
                <li><a href="##">Shoes<span class="arrow"><i class="icon-angle-right"></i></span></a>
                  <ul class="nav-level-3">
                    <li><a href="##">Heels</a></li>
                    <li><a href="##">Boots</a></li>
                    <li><a href="##">Flats</a></li>
                    <li><a href="##">Sneakers &amp; Athletic</a></li>
                    <li><a href="##">Clogs &amp; Mules</a></li>
                  </ul>
                </li>
                <li><a href="##">Bottoms<span class="arrow"><i class="icon-angle-right"></i></span></a>
                  <ul class="nav-level-3">
                    <li><a href="##">Jeans</a></li>
                    <li><a href="##">Pants</a></li>
                    <li><a href="##">slippers</a></li>
                    <li><a href="##">suits</a></li>
                    <li><a href="##">socks</a></li>
                  </ul>
                </li>
                <li><a href="##">Accessories<span class="arrow"><i class="icon-angle-right"></i></span></a>
                  <ul class="nav-level-3">
                    <li><a href="##">Sunglasses</a></li>
                    <li><a href="##">Hats</a></li>
                    <li><a href="##">Watches</a></li>
                    <li><a href="##">Jewelry</a></li>
                    <li><a href="##">Belts</a></li>
                  </ul>
                </li>
                <li><a href="##">Bags<span class="arrow"><i class="icon-angle-right"></i></span></a>
                  <ul class="nav-level-3">
                    <li><a href="##">Handbags</a></li>
                    <li><a href="##">Backpacks</a></li>
                    <li><a href="##">Luggage</a></li>
                    <li><a href="##">wallets</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#buynow" target="_blank">Buy Theme<span class="menu-label menu-label--color3">Hurry Up!</span><span class="arrow"><i class="icon-angle-right"></i></span></a></li>
          </ul>
        </div>
        <div class="mobilemenu-bottom">
          <div class="mobilemenu-currency">
            <!-- Header Currency -->
            <div class="dropdn_currency">
              <div class="dropdn dropdn_caret">
                <a href="#" class="dropdn-link js-dropdn-link">US dollars<i class="icon-angle-down"></i></a>
                <div class="dropdn-content">
                  <ul>
                    <li class="active"><a href="#"><span>US dollars</span></a></li>
                    <li><a href="#"><span>Euro</span></a></li>
                    <li><a href="#"><span>UK pounds</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /Header Currency -->
          </div>
          <div class="mobilemenu-language">
            <!-- Header Language -->
            <div class="dropdn_language">
              <div class="dropdn dropdn_language dropdn_language--noimg dropdn_caret">
                <a href="#" class="dropdn-link js-dropdn-link"><span class="js-dropdn-select-current">English</span><i class="icon-angle-down"></i></a>
                <div class="dropdn-content">
                  <ul>
                    <li class="active"><a href="#"><img src="images/flags/en.png" alt="">English</a></li>
                    <li><a href="#"><img src="images/flags/sp.png" alt="">Spanish</a></li>
                    <li><a href="#"><img src="images/flags/de.png" alt="">German</a></li>
                    <li><a href="#"><img src="images/flags/fr.png" alt="">French</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /Header Language -->
          </div>
        </div>
      </div>
    </div>
  </div>








<div>
  <!-- /Mobile Menu -->
  <div class="dropdn-content account-drop" id="dropdnAccount">
    <div class="dropdn-content-block" >
      <div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
      <ul>
      @if(Route::has('login')) 
        @auth
        <hr>
          <li ><a href="##">{{Auth::user()->name}}<i class="icon-user"></i></a></li>
         <li><a href="##"><span>Checkout</span><i class="icon-card"></i></a></li>
         <br>
        <li><button class="btn btn-success <a href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout
        </button></a>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
        </form>
        </li>
        @else 
        <li><a href="{{ route('login') }}"><span>Log In</span><i class="icon-login"></i></a></li>
          @if(Route::has('register'))
          <li><a href="{{ route('create') }}"><span>Register</span><i class="icon-user2"></i></a></li>
 

<br>
<hr>
<div>
        <h5>Quick Login</h5>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your e-mail" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
          <div class="form-group">
          <!-- div class="col-md-10"> -->
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
          
          <!-- </div> -->
<!-- 
          <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

          
                                          <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
        </button>
        </form>
      </div>
        @endif
      @endauth
      @endif

      </ul>

    </div>
    <div class="drop-overlay js-dropdn-close"></div>
  </div>
  </div>







  <div class="dropdn-content minicart-drop" id="dropdnMinicart">
    <div class="dropdn-content-block">
      <div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
      <div class="minicart-drop-content js-dropdn-content-scroll">
        <div class="minicart-prd row">
          <div class="minicart-prd-image image-hover-scale-circle col">
            <a href="# "><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-01-1.jpg" alt=""></a>
          </div>
          <div class="minicart-prd-info col">
            <div class="minicart-prd-tag">FOXic</div>
            <h2 class="minicart-prd-name"><a href="#">Leather Pegged Pants</a></h2>
            <div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span></div>
            <div class="minicart-prd-price prd-price">
              <div class="price-old">$200.00</div>
              <div class="price-new">$180.00</div>
            </div>
          </div>
          <div class="minicart-prd-action">
            <a href="#" class="js-product-remove" data-line-number="1"><i class="icon-recycle"></i></a>
          </div>
        </div>
        <div class="minicart-prd row">
          <div class="minicart-prd-image image-hover-scale-circle col">
            <a href="# "><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-16-1.jpg" alt=""></a>
          </div>
          <div class="minicart-prd-info col">
            <div class="minicart-prd-tag">FOXic</div>
            <h2 class="minicart-prd-name"><a href="#">Cascade Casual Shirt</a></h2>
            <div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span></div>
            <div class="minicart-prd-price prd-price">
              <div class="price-old">$200.00</div>
              <div class="price-new">$180.00</div>
            </div>
          </div>
          <div class="minicart-prd-action">
            <a href="#" class="js-product-remove" data-line-number="2"><i class="icon-recycle"></i></a>
          </div>
        </div>
        <div class="minicart-empty js-minicart-empty d-none">
          <div class="minicart-empty-text">Your cart is empty</div>
          <div class="minicart-empty-icon">
            <i class="icon-shopping-bag"></i>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 306 262" style="enable-background:new 0 0 306 262;" xml:space="preserve">
              <path class="st0" d="M78.1,59.5c0,0-37.3,22-26.7,85s59.7,237,142.7,283s193,56,313-84s21-206-69-240s-249.4-67-309-60C94.6,47.6,78.1,59.5,78.1,59.5z" />
            </svg>
          </div>
        </div>
        <a href="#" class="minicart-drop-countdown mt-3">
          <div class="countdown-box-full">
            <div class="row no-gutters align-items-center">
              <div class="col-auto"><i class="icon-gift icon--giftAnimate"></i></div>
              <div class="col">
                <div class="countdown-txt">WHEN BUYING TWO
                  THINGS A THIRD AS A GIFT
                </div>
                <div class="countdown js-countdown" data-countdown="2021/07/01"></div>
              </div>
            </div>
          </div>
        </a>
        <div class="minicart-drop-info d-none d-md-block">
          <div class="shop-feature-single row no-gutters align-items-center">
            <div class="shop-feature-icon col-auto"><i class="icon-truck"></i></div>
            <div class="shop-feature-text col"><b>SHIPPING!</b> Continue shopping to add more products and receive free shipping</div>
          </div>
        </div>
      </div>
      <div class="minicart-drop-fixed js-hide-empty">
        <div class="loader-horizontal-sm js-loader-horizontal-sm" data-loader-horizontal=""><span></span></div>
        <div class="minicart-drop-total js-minicart-drop-total row no-gutters align-items-center">
          <div class="minicart-drop-total-txt col-auto heading-font">Subtotal</div>
          <div class="minicart-drop-total-price col" data-header-cart-total="">$340</div>
        </div>
        <div class="minicart-drop-actions">
          <a href="{{asset('cartpage/'.$cat_product[$i]->product_sub_cat.'/'.$cat_product[$i]->product_cat.'/'.$cat_product[$i]->slug)}}" class="btn btn--md btn--grey"><i class="icon-basket"></i><span>Cart Page</span></a>
          <a href="{{route('varient1')}}" class="btn btn--md"><i class="icon-checkout"></i><span>Check out</span></a>
        </div>
        <ul class="payment-link mb-2">
          <li><i class="icon-amazon-logo"></i></li>
          <li><i class="icon-visa-pay-logo"></i></li>
          <li><i class="icon-skrill-logo"></i></li>
          <li><i class="icon-klarna-logo"></i></li>
          <li><i class="icon-paypal-logo"></i></li>
          <li><i class="icon-apple-pay-logo"></i></li>
        </ul>
      </div>
    </div>
    <div class="drop-overlay js-dropdn-close"></div>
  </div>
</div>