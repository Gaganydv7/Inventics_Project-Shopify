@extends('master')
@section('content')

<div class="page-content">
    <div class="holder breadcrumbs-wrap mt-0">
      <div class="container">
        <ul class="breadcrumbs">
          <li><a href="{{route('index')}}">Home</a></li>
          <li><span>Category</span></li>
        </ul>
      </div>
    </div>
    <div class="holder holder-mt-medium">
      <div class="container">
        <div class="row bnr-grid vert-margin-small">
          <div class="col-18 col-sm-6"><a href="##" target="_self" class="bnr-wrap">
              <div class="bnr custom-caption image-hover-scale bnr--middle bnr--center" data-fontratio="5.7">
                <div class="bnr-img  image-container" style="padding-bottom: 68.22%">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/banner-category-03.png" class="lazyload fade-up" alt="Banner">
                </div>
                <div class="bnr-caption">
                  <div class="bnr-caption-bg bnr-caption-bg--padding">
                    <div class="bnr-text11 mt-sm order-2 inherit">Men</div>
                    <span class="bnr-caption-bg-color"></span>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-18 col-sm-6"><a href="##" target="_self" class="bnr-wrap">
              <div class="bnr custom-caption image-hover-scale bnr--middle bnr--center" data-fontratio="5.7">
                <div class="bnr-img  image-container" style="padding-bottom: 68.22%">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/banner-category-04.png" class="lazyload fade-up" alt="Banner">
                </div>
                <div class="bnr-caption">
                  <div class="bnr-caption-bg bnr-caption-bg--padding">
                    <div class="bnr-text11 mt-sm order-2 inherit">Women</div>
                    <span class="bnr-caption-bg-color"></span>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-18 col-sm-6"><a href="##" target="_self" class="bnr-wrap">
              <div class="bnr custom-caption image-hover-scale bnr--middle bnr--center" data-fontratio="5.7">
                <div class="bnr-img  image-container" style="padding-bottom: 68.22%">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/banner-category-05.png" class="lazyload fade-up" alt="Banner">
                </div>
                <div class="bnr-caption">
                  <div class="bnr-caption-bg bnr-caption-bg--padding">
                    <div class="bnr-text11 mt-sm order-2 inherit">Accessories</div>
                    <span class="bnr-caption-bg-color"></span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="holder">
      <div class="container">
        <!-- Two columns -->
        <!-- Page Title -->
        <div class="page-title text-center">
          <div class="row justify-content-end">
            <div class="col-lg-14">
              <h1>WOMEN’S</h1>
            </div>
          </div>
        </div>
        <!-- /Page Title -->
        <div class="row">
          <!-- Left column -->
          <div class="col-lg-4 aside aside--left filter-col filter-mobile-col filter-col--sticky js-filter-col filter-col--opened-desktop" data-grid-tab-content>
            <div class="filter-col-content filter-mobile-content">
              <div class="sidebar-block">
                <div class="sidebar-block_title">
                  <span>Current selection</span>
                </div>
                <div class="sidebar-block_content">
                  <div class="selected-filters-wrap">
                    <ul class="selected-filters">
                      <li><a href="#">Grey</a></li>
                      <li><a href="#">Men</a></li>
                      <li><a href="#">Above $200</a></li>
                    </ul>
                    <div class="d-flex flex-wrap align-items-center">
                      <a href="#" class="clear-filters"><span>Clear All</span></a>
                      <div class="selected-filters-count ml-auto d-none d-lg-block">Selected <span>6 items</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sidebar-block d-filter-mobile">
                <h3 class="mb-1">SORT BY</h3>
                <div class="select-wrapper select-wrapper-xs">
                  <select class="form-control">
                    <option value="featured">Featured</option>
                    <option value="rating">Rating</option>
                    <option value="price">Price</option>
                  </select>
                </div>
              </div>
              <div class="sidebar-block filter-group-block open">
                <div class="sidebar-block_title">
                  <span>Categories</span>
                  <span class="toggle-arrow"><span></span><span></span></span>
                </div>
                <div class="sidebar-block_content">
                  <ul class="category-list">
                    <li class="active"><a href="##" title="Casual" class="open">Casual&nbsp;<span>(30)</span></a>
                      <div class="toggle-category js-toggle-category"><span><i class="icon-angle-down"></i></span></div>
                      <ul class="category-list category-list">
                        <li><a href="##" title="Men">Men&nbsp;<span>(10)</span></a></li>
                        <li><a href="##" title="Women">Women&nbsp;<span>(10)</span></a></li>
                        <li><a href="##" title="Accessories">Accessories&nbsp;<span>(10)</span></a></li>
                      </ul>
                    </li>
                    <li><a href="##" title="T-Shirts" class="open">T-Shirts</a></li>
                    <li><a href="##" title="Medical" class="open">Medical</a></li>
                    <li><a href="##" title="FoodMarket" class="open">FoodMarket</a></li>
                    <li><a href="##" title="Bikes" class="open">Bikes&nbsp;<span>(12)</span></a></li>
                    <li><a href="##" title="Cosmetics" class="open">Cosmetics&nbsp;<span>(16)</span></a></li>
                    <li><a href="##" title="Fishing" class="open">Fishing&nbsp;<span>(20)</span></a></li>
                    <li><a href="##" title="Electronics" class="open">Electronics&nbsp;<span>(15)</span></a></li>
                    <li><a href="##" title="Games" class="open">Games&nbsp;<span>(14)</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="sidebar-block filter-group-block collapsed">
                <div class="sidebar-block_title">
                  <span>Colors</span>
                  <span class="toggle-arrow"><span></span><span></span></span>
                </div>
                <div class="sidebar-block_content">
                  <ul class="color-list two-column">
                    <li class="active"><a href="#" data-tooltip="Dark Red" title="Dark Red"><span class="value"><img src="images/colorswatch/color-red.png" alt=""></span><span class="colorname">Red (87)</span></a></li>
                    <li><a href="#" data-tooltip="Pink" title="Pink"><span class="value"><img src="images/colorswatch/color-pink.png" alt=""></span><span class="colorname">Pink (95)</span></a></li>
                    <li><a href="#" data-tooltip="Violet" title="Violet"><span class="value"><img src="images/colorswatch/color-violet.png" alt=""></span><span class="colorname">Violet (18)</span></a></li>
                    <li><a href="#" data-tooltip="Blue" title="Blue"><span class="value"><img src="images/colorswatch/color-blue.png" alt=""></span><span class="colorname">Blue (78)</span></a></li>
                    <li><a href="#" data-tooltip="Marine" title="Marine"><span class="value"><img src="images/colorswatch/color-marine.png" alt=""></span><span class="colorname">Marine (45)</span></a></li>
                    <li><a href="#" data-tooltip="Orange" title="Orange"><span class="value"><img src="images/colorswatch/color-orange.png" alt=""></span><span class="colorname">Orange (96)</span></a></li>
                    <li><a href="#" data-tooltip="Yellow" title="Yellow"><span class="value"><img src="images/colorswatch/color-yellow.png" alt=""></span><span class="colorname">Yellow (55)</span></a></li>
                    <li><a href="#" data-tooltip="Dark Yellow" title="Dark Yellow"><span class="value"><img src="images/colorswatch/color-darkyellow.png" alt=""></span><span class="colorname">Dark Yellow (2)</span></a></li>
                    <li><a href="#" data-tooltip="Black" title="Black"><span class="value"><img src="images/colorswatch/color-black.png" alt=""></span><span class="colorname">Black (15)</span></a></li>
                    <li><a href="#" data-tooltip="White" title="White"><span class="value"><img src="images/colorswatch/color-white.png" alt=""></span><span class="colorname">White (58)</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="sidebar-block filter-group-block collapsed">
                <div class="sidebar-block_title">
                  <span>Size</span>
                  <span class="toggle-arrow"><span></span><span></span></span>
                </div>
                <div class="sidebar-block_content">
                  <ul class="category-list two-column size-list" data-sort='["XXS","XS","S","M","L","XL","XXL","XXXL"]'>
                    <li data-value="L" class="active"><a href="#">L</a></li>
                    <li data-value="XL"><a href="#">XL</a></li>
                    <li data-value="XXS"><a href="#">XXS</a></li>
                    <li data-value="XS"><a href="#">XS</a></li>
                    <li data-value="S"><a href="#">S</a></li>
                    <li data-value="XXL"><a href="#">XXL</a></li>
                    <li data-value="XXXL"><a href="#">XXXL</a></li>
                  </ul>
                </div>
              </div>
              <div class="sidebar-block filter-group-block collapsed">
                <div class="sidebar-block_title">
                  <span>Brands</span>
                  <span class="toggle-arrow"><span></span><span></span></span>
                </div>
                <div class="sidebar-block_content">
                  <ul class="category-list">
                    <li><a href="#">Adidas</a></li>
                    <li><a href="#">Nike</a></li>
                    <li class="active"><a href="#">Reebok</a></li>
                    <li><a href="#">Ralph Lauren</a></li>
                    <li><a href="#">Delpozo</a></li>
                  </ul>
                </div>
              </div>
              <div class="sidebar-block filter-group-block collapsed">
                <div class="sidebar-block_title">
                  <span>Price</span>
                  <span class="toggle-arrow"><span></span><span></span></span>
                </div>
                <div class="sidebar-block_content">
                  <ul class="category-list">
                    <li><a href="#">$100-$200</a></li>
                    <li class="active"><a href="#">Above $200</a></li>
                    <li><a href="#">Under $100</a></li>
                  </ul>
                </div>
              </div>
              <div class="sidebar-block filter-group-block collapsed">
                <div class="sidebar-block_title">
                  <span>Popular tags</span>
                  <span class="toggle-arrow"><span></span><span></span></span>
                </div>
                <div class="sidebar-block_content">
                  <ul class="tags-list">
                    <li class="active"><a href="#">Jeans</a></li>
                    <li><a href="#">St.Valentine’s gift</a></li>
                    <li><a href="#">Sunglasses</a></li>
                    <li><a href="#">Discount</a></li>
                    <li><a href="#">Maxi dress</a></li>
                  </ul>
                </div>
              </div>
              <a href="https://bit.ly/3eJX5XE" class="bnr image-hover-scale bnr--bottom bnr--left" data-fontratio="3.95">
                <div class="bnr-img">
                  <img src="images/banners/banner-collection-aside.png" alt="">
                </div>
              </a>
            </div>
          </div>
          <!-- filter toggle -->
          <div class="filter-toggle js-filter-toggle">
            <div class="loader-horizontal js-loader-horizontal">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
              </div>
            </div>
            <span class="filter-toggle-icons js-filter-btn"><i class="icon-filter"></i><i class="icon-filter-close"></i></span>
            <span class="filter-toggle-text"><a href="#" class="filter-btn-open js-filter-btn">REFINE & SORT</a><a href="#" class="filter-btn-close js-filter-btn">RESET</a><a href="#" class="filter-btn-apply js-filter-btn">APPLY & CLOSE</a></span>
          </div>
          <!-- /Left column -->
          <!-- Center column -->
          <div class="col-lg aside">
            <div class="prd-grid-wrap">
              <div class="page404-bg">
                <div class="page404-text">
                  <div class="txt3"><i class="icon-shopping-bag"></i></div>
                  <div class="txt4">Unfortunately, there are no products<br>matching the selection</div>
                </div>
                <svg class="blob" id="morphing" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600">
                  <g transform="translate(50,50)">
                    <path class="p" d="M93.5441 2.30824C127.414 -1.02781 167.142 -4.63212 188.625 21.7114C210.22 48.1931 199.088 86.5178 188.761 119.068C179.736 147.517 162.617 171.844 136.426 186.243C108.079 201.828 73.804 212.713 44.915 198.152C16.4428 183.802 6.66731 149.747 1.64848 118.312C-2.87856 89.9563 1.56309 60.9032 19.4066 38.3787C37.3451 15.7342 64.7587 5.14348 93.5441 2.30824Z" />
                  </g>
                </svg>
              </div>
            </div>
          </div>
          <!-- /Center column -->
        </div>
        <!-- /Two columns -->
      </div>
    </div>
    <div class="holder">
      <div class="container">
        <div class="title-wrap text-center">
          <h2 class="h1-style">You may also like</h2>
          <div class="carousel-arrows carousel-arrows--center"></div>
        </div>
        <div class="prd-grid prd-carousel js-prd-carousel slick-arrows-aside-simple slick-arrows-mobile-lg data-to-show-4 data-to-show-md-3 data-to-show-sm-3 data-to-show-xs-2" data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 3, "slidesToScroll": 1}},{"breakpoint": 768,"settings": {"slidesToShow": 2, "slidesToScroll": 1}},{"breakpoint": 480,"settings": {"slidesToShow": 2, "slidesToScroll": 1}}]}'>
          <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
            <div class="prd-inside">
              <div class="prd-img-area">
                <a href="##" class="prd-img image-hover-scale image-container">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-06-1.jpg" alt="Midi Dress with Belt" class="js-prd-img lazyload fade-up">
                  <div class="foxic-loader"></div>
                  <div class="prd-big-squared-labels">
                  </div>
                </a>
                <div class="prd-circle-labels">
                  <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                  <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
                  <div class="colorswatch-label colorswatch-label--variants js-prd-colorswatch">
                    <i class="icon-palette"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>
                    <ul>
                      <li data-image="images/skins/fashion/products/product-06-1.jpg"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="images/colorswatch/color-grey.png" alt=""></a></li>
                      <li data-image="images/skins/fashion/products/product-06-color-2.jpg"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="images/colorswatch/color-green.png" alt=""></a></li>
                      <li data-image="images/skins/fashion/products/product-06-color-3.jpg"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="images/colorswatch/color-black.png" alt=""></a></li>
                    </ul>
                  </div>
                </div>
                <ul class="list-options color-swatch">
                  <li data-image="images/skins/fashion/products/product-06-1.jpg" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-06-1.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                  <li data-image="images/skins/fashion/products/product-06-2.jpg"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-06-2.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                  <li data-image="images/skins/fashion/products/product-06-3.jpg"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-06-3.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                </ul>
              </div>
              <div class="prd-info">
                <div class="prd-info-wrap">
                  <div class="prd-info-top">
                    <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                  </div>
                  <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                  <div class="prd-tag"><a href="#">Seiko</a></div>
                  <h2 class="prd-title"><a href="##">Midi Dress with Belt</a></h2>
                  <div class="prd-description">
                    Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                  </div>
                  <div class="prd-action">
                    <form action="#">
                      <button class="btn js-prd-addtocart" data-product='{"name": "Midi Dress with Belt", "path":"images/skins/fashion/products/product-06-1.jpg", "url":"{{route("page1")}}", "aspect_ratio":0.778}'>Add To Cart</button>
                    </form>
                  </div>
                </div>
                <div class="prd-hovers">
                  <div class="prd-circle-labels">
                    <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                    <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                  </div>
                  <div class="prd-price">
                    <div class="price-new">$ 180</div>
                  </div>
                  <div class="prd-action">
                    <div class="prd-action-left">
                      <form action="#">
                        <button class="btn js-prd-addtocart" data-product='{"name": "Midi Dress with Belt", "path":"images/skins/fashion/products/product-06-1.jpg", "url":"{{route("page1")}}", "aspect_ratio":0.778}'>Add To Cart</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
            <div class="prd-inside">
              <div class="prd-img-area">
                <a href="##" class="prd-img image-hover-scale image-container">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-17-1.jpg" alt="Stand Collar Shirt" class="js-prd-img lazyload fade-up">
                  <div class="foxic-loader"></div>
                  <div class="prd-big-squared-labels">
                    <div class="label-sale"><span>-10% <span class="sale-text">Sale</span></span>
                      <div class="countdown-circle">
                        <div class="countdown js-countdown" data-countdown="2021/07/01"></div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="prd-circle-labels">
                  <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                  <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
                </div>
                <ul class="list-options color-swatch">
                  <li data-image="images/skins/fashion/products/product-17-1.jpg" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-17-1.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                  <li data-image="images/skins/fashion/products/product-17-2.jpg"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-17-2.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                  <li data-image="images/skins/fashion/products/product-17-3.jpg"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-17-3.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                </ul>
              </div>
              <div class="prd-info">
                <div class="prd-info-wrap">
                  <div class="prd-info-top">
                    <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                  </div>
                  <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                  <div class="prd-tag"><a href="#">FOXic</a></div>
                  <h2 class="prd-title"><a href="##">Stand Collar Shirt</a></h2>
                  <div class="prd-description">
                    Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                  </div>
                  <div class="prd-action">
                    <form action="#">
                      <button class="btn js-prd-addtocart" data-product='{"name": "Stand Collar Shirt", "path":"images/skins/fashion/products/product-17-1.jpg", "url":"{{route("page1")}}", "aspect_ratio":0.778}'>Add To Cart</button>
                    </form>
                  </div>
                </div>
                <div class="prd-hovers">
                  <div class="prd-circle-labels">
                    <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                    <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                  </div>
                  <div class="prd-price">
                    <div class="price-old">$ 200</div>
                    <div class="price-new">$ 180</div>
                  </div>
                  <div class="prd-action">
                    <div class="prd-action-left">
                      <form action="#">
                        <button class="btn js-prd-addtocart" data-product='{"name": "Stand Collar Shirt", "path":"images/skins/fashion/products/product-17-1.jpg", "url":"{{route("page1")}}", "aspect_ratio":0.778}'>Add To Cart</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
            <div class="prd-inside">
              <div class="prd-img-area">
                <a href="##" class="prd-img image-hover-scale image-container">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-21-1.jpg" alt="Genuine Leather Strap Watch" class="js-prd-img lazyload fade-up">
                  <div class="foxic-loader"></div>
                  <div class="prd-big-squared-labels">
                    <div class="label-new"><span>New</span></div>
                  </div>
                </a>
                <div class="prd-circle-labels">
                  <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                  <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
                </div>
                <ul class="list-options color-swatch">
                  <li data-image="images/skins/fashion/products/product-21-1.jpg" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-21-1.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                  <li data-image="images/skins/fashion/products/product-21-2.jpg"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-21-2.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                  <li data-image="images/skins/fashion/products/product-21-3.jpg"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-21-3.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                </ul>
              </div>
              <div class="prd-info">
                <div class="prd-info-wrap">
                  <div class="prd-info-top">
                    <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                  </div>
                  <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                  <div class="prd-tag"><a href="#">FOXic</a></div>
                  <h2 class="prd-title"><a href="##">Genuine Leather Strap Watch</a></h2>
                  <div class="prd-description">
                    Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                  </div>
                  <div class="prd-action">
                    <form action="#">
                      <button class="btn js-prd-addtocart" data-product='{"name": "Genuine Leather Strap Watch", "path":"images/skins/fashion/products/product-21-1.jpg", "url":"{{route("page1")}}", "aspect_ratio":0.778}'>Add To Cart</button>
                    </form>
                  </div>
                </div>
                <div class="prd-hovers">
                  <div class="prd-circle-labels">
                    <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                    <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                  </div>
                  <div class="prd-price">
                    <div class="price-new">$ 180</div>
                  </div>
                  <div class="prd-action">
                    <div class="prd-action-left">
                      <form action="#">
                        <button class="btn js-prd-addtocart" data-product='{"name": "Genuine Leather Strap Watch", "path":"images/skins/fashion/products/product-21-1.jpg", "url":"{{route("page1")}}", "aspect_ratio":0.778}'>Add To Cart</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
            <div class="prd-inside">
              <div class="prd-img-area">
                <a href="##" class="prd-img image-hover-scale image-container">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-26-1.jpg" alt="Pureboost Running Shoes" class="js-prd-img lazyload fade-up">
                  <div class="foxic-loader"></div>
                  <div class="prd-big-squared-labels">
                  </div>
                </a>
                <div class="prd-circle-labels">
                  <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                  <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
                </div>
                <ul class="list-options color-swatch">
                  <li data-image="images/skins/fashion/products/product-26-1.jpg" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-26-1.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                  <li data-image="images/skins/fashion/products/product-26-2.jpg"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-26-2.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                  <li data-image="images/skins/fashion/products/product-26-3.jpg"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-26-3.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                </ul>
              </div>
              <div class="prd-info">
                <div class="prd-info-wrap">
                  <div class="prd-info-top">
                    <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                  </div>
                  <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                  <div class="prd-tag"><a href="#">FOXic</a></div>
                  <h2 class="prd-title"><a href="##">Pureboost Running Shoes</a></h2>
                  <div class="prd-description">
                    Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                  </div>
                  <div class="prd-action">
                    <form action="#">
                      <button class="btn js-prd-addtocart" data-product='{"name": "Pureboost Running Shoes", "path":"images/skins/fashion/products/product-26-1.jpg", "url":"{{route("page1")}}", "aspect_ratio":0.778}'>Add To Cart</button>
                    </form>
                  </div>
                </div>
                <div class="prd-hovers">
                  <div class="prd-circle-labels">
                    <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                    <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                  </div>
                  <div class="prd-price">
                    <div class="price-new">$ 180</div>
                  </div>
                  <div class="prd-action">
                    <div class="prd-action-left">
                      <form action="#">
                        <button class="btn js-prd-addtocart" data-product='{"name": "Pureboost Running Shoes", "path":"images/skins/fashion/products/product-26-1.jpg", "url":"{{route("page1")}}", "aspect_ratio":0.778}'>Add To Cart</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
            <div class="prd-inside">
              <div class="prd-img-area">
                <a href="##" class="prd-img image-hover-scale image-container">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-30-1.jpg" alt="Multiple Pocket Waist Pack" class="js-prd-img lazyload fade-up">
                  <div class="foxic-loader"></div>
                  <div class="prd-big-squared-labels">
                  </div>
                </a>
                <div class="prd-circle-labels">
                  <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                  <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
                </div>
                <ul class="list-options color-swatch">
                  <li data-image="images/skins/fashion/products/product-30-1.jpg" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-30-1.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                  <li data-image="images/skins/fashion/products/product-30-2.jpg"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-30-2.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                  <li data-image="images/skins/fashion/products/product-30-3.jpg"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-30-3.jpg" class="lazyload fade-up" alt="Color Name"></a></li>
                </ul>
              </div>
              <div class="prd-info">
                <div class="prd-info-wrap">
                  <div class="prd-info-top">
                    <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                  </div>
                  <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                  <div class="prd-tag"><a href="#">FOXic</a></div>
                  <h2 class="prd-title"><a href="##">Multiple Pocket Waist Pack</a></h2>
                  <div class="prd-description">
                    Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                  </div>
                  <div class="prd-action">
                    <form action="#">
                      <button class="btn js-prd-addtocart" data-product='{"name": "Multiple Pocket Waist Pack", "path":"images/skins/fashion/products/product-30-1.jpg", "url":"{{route("page1")}}", "aspect_ratio":0.778}'>Add To Cart</button>
                    </form>
                  </div>
                </div>
                <div class="prd-hovers">
                  <div class="prd-circle-labels">
                    <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                    <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                  </div>
                  <div class="prd-price">
                    <div class="price-new">$ 180</div>
                  </div>
                  <div class="prd-action">
                    <div class="prd-action-left">
                      <form action="#">
                        <button class="btn js-prd-addtocart" data-product='{"name": "Multiple Pocket Waist Pack", "path":"images/skins/fashion/products/product-30-1.jpg", "url":"{{route("page1")}}", "aspect_ratio":0.778}'>Add To Cart</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection