@php 
  $counter=0;
@endphp
<div class="holder mt-0 holder-with-bg holder-pt-medium holder-pb-medium bgcolor">
  <div class="container">
    <div class="title-with-arrows title-wrap text-left">
      <h2 class="h2-style">NEW ARRIVALS</h2>
      <div class="h-behind"></div>
      <div class="carousel-arrows"><button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" >Previous</button><button class="slick-next slick-arrow" aria-label="Next" type="button" aria-disabled="false" >Next</button></div>
    </div>

    <div class="prd-grid prd-carousel js-prd-carousel slick-arrows-aside-simple slick-arrows-mobile-lg data-to-show-4 data-to-show-md-3 data-to-show-sm-3 data-to-show-xs-2" data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 3, "slidesToScroll": 1}},{"breakpoint": 768,"settings": {"slidesToShow": 2, "slidesToScroll": 1}},{"breakpoint": 480,"settings": {"slidesToShow": 2, "slidesToScroll": 1}}]}'>

 
    @php
    $subcounter=0;
    @endphp
    @for($i=$counter;$i<count($cat_product);$i++)
    @if($subcounter<5)
      <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
        <div class="prd-inside">
          <div class="prd-img-area">
            <a href="page1/{{$cat_product[$i]->product_sub_cat}}/{{$cat_product[$i]->product_cat}}/{{$cat_product[$i]->slug}}" class="prd-img image-hover-scale image-container" >

              <img src="{{$img_url}}{{$cat_product[$i]->img_path}}" data-src="{{$img_url}}{{$cat_product[$i]->img_path}}" alt="Antimicrobial Skin Cleanser" class="js-prd-img lazyload fade-up">
              <img src="{{$img_url}}{{$cat_product[$i]->img_path}}" data-src="{{$img_url}}{{$cat_product[$i]->img_path}}" alt="Antimicrobial Skin Cleanser" class="js-prd-img lazyload fade-up">
              <div class="foxic-loader"></div>
              <div class="prd-big-circle-labels">
              </div>
            </a>
            <div class="prd-circle-labels">
              <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
              <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
            </div>
            <ul class="list-options color-swatch">
              <li data-image="{{$img_url}}{{$cat_product[$i]->img_path}}" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="{{$img_url}}{{$cat_product[$i]->img_path}}" data-src="{{$img_url}}{{$cat_product[$i]->img_path}}" class="lazyload fade-up" alt="Color Name"></a></li>
              <li data-image="{{$img_url}}{{$cat_product[$i]->img_path}}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="{{$img_url}}{{$cat_product[$i]->img_path}}" data-src="{{$img_url}}{{$cat_product[$i]->img_path}}" class="lazyload fade-up" alt="Color Name"></a></li>
            </ul>
          </div>
          <div class="prd-info prd-info--pad">
            <div class="prd-info-wrap">
              <div class="prd-info-top">
                <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
              </div>
              <div class="prd-tag"><a href="#">{{$cat_product[$i]->brand}}</a></div>
              <h2 class="prd-title"><a href="# ">{{$cat_product[$i]->name}}</a></h2>
              <div class="prd-description">
                {{$cat_product[$i]->description}}
              </div>
            </div>
            <div class="prd-hovers">
              <div class="prd-circle-labels">
                <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                <div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
              </div>
              <div class="prd-price">
                <div class="price-new">{{$currency}}{{$cat_product[$i]->min_price+0}}</div>
                <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
              </div>
              <div class="prd-action">
                <div class="prd-action-left">
                <form action="{{route('addtocart')}}" method ="post">
                          @csrf
                          @method('post')
                          <input type ="hidden" name="product_id" value="{{$cat_product[$i]->id}}"></input>
                          <button class="btn js-prd-addtocart" type="submit">Add to Cart</button>



                    <!-- <button class="btn js-prd-addtocart" data-product='{"name": "Antimicrobial Skin Cleanser", "path":"{{$img_url}}{{$cat_product[$i]->img_path}}", "url":"", "aspect_ratio":0.778}'>Add To Cart</button> -->
                  </form>
    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@php
$subcounter++;
$counter++;
@endphp
@endif
@endfor


      
      <!-- <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
        <div class="prd-inside">
          <div class="prd-img-area">
            <a href="##" class="prd-img image-hover-scale image-container">
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/20.png" alt="3-Layer Cotton Fabric Face Mask" class="js-prd-img lazyload fade-up">
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/19.png" alt="3-Layer Cotton Fabric Face Mask" class="js-prd-img lazyload fade-up">
              <div class="foxic-loader"></div>
              <div class="prd-big-circle-labels">
              </div>
            </a>
            <div class="prd-circle-labels">
              <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
              <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
            </div>
            <ul class="list-options color-swatch">
              <li data-image="images/skins/medical/products/19.png" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/19.png" class="lazyload fade-up" alt="Color Name"></a></li>
              <li data-image="images/skins/medical/products/20.png"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/20.png" class="lazyload fade-up" alt="Color Name"></a></li>
            </ul>
          </div>
          <div class="prd-info prd-info--pad">
            <div class="prd-info-wrap">
              <div class="prd-info-top">
                <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
              </div>
              <div class="prd-tag"><a href="#">Seiko</a></div>
              <h2 class="prd-title"><a href="# ">3-Layer Cotton Fabric Face Mask</a></h2>
              <div class="prd-description">
                Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
              </div>
            </div>
            <div class="prd-hovers">
              <div class="prd-circle-labels">
                <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                <div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
              </div>
              <div class="prd-price">
                <div class="price-new">$ 180</div>
                <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
              </div>
              <div class="prd-action">
                <div class="prd-action-left">
                  <form action="#">
                    <button class="btn js-prd-addtocart" data-product='{"name": "3-Layer Cotton Fabric Face Mask", "path":"images/skins/medical/products/19.png", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
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
            <a href="" class="prd-img image-hover-scale image-container">
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/21.png" alt="Non Contact Infrared Thermometer" class="js-prd-img lazyload fade-up">
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/22.png" alt="Non Contact Infrared Thermometer" class="js-prd-img lazyload fade-up">
              <div class="foxic-loader"></div>
              <div class="prd-big-circle-labels">
                <div class="label-new"><span>New</span></div>
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
              <li data-image="images/skins/medical/products/21.png" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/21.png" class="lazyload fade-up" alt="Color Name"></a></li>
              <li data-image="images/skins/medical/products/22.png"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/22.png" class="lazyload fade-up" alt="Color Name"></a></li>
            </ul>
          </div>
          <div class="prd-info prd-info--pad">
            <div class="prd-info-wrap">
              <div class="prd-info-top">
                <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
              </div>
              <div class="prd-tag"><a href="#">Banita</a></div>
              <h2 class="prd-title"><a href="# ">Non Contact Infrared Thermometer</a></h2>
              <div class="prd-description">
                Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
              </div>
            </div>
            <div class="prd-hovers">
              <div class="prd-circle-labels">
                <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                <div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
              </div>
              <div class="prd-price">
                <div class="price-old">$ 200</div>
                <div class="price-new">$ 180</div>
                <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
              </div>
              <div class="prd-action">
                <div class="prd-action-left">
                  <form action="#">
                    <button class="btn js-prd-addtocart" data-product='{"name": "Non Contact Infrared Thermometer", "path":"images/skins/medical/products/21.png", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
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
            <a href="# " class="prd-img image-hover-scale image-container">
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/23.png" alt="Non Contact Thermometer" class="js-prd-img lazyload fade-up">
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/24.png" alt="Non Contact Thermometer" class="js-prd-img lazyload fade-up">
              <div class="foxic-loader"></div>
              <div class="prd-big-circle-labels">
              </div>
            </a>
            <div class="prd-circle-labels">
              <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
              <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
            </div>
            <ul class="list-options color-swatch">
              <li data-image="images/skins/medical/products/23.png" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/23.png" class="lazyload fade-up" alt="Color Name"></a></li>
              <li data-image="images/skins/medical/products/24.png"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/24.png" class="lazyload fade-up" alt="Color Name"></a></li>
            </ul>
          </div>
          <div class="prd-info prd-info--pad">
            <div class="prd-info-wrap">
              <div class="prd-info-top">
                <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
              </div>
              <div class="prd-tag"><a href="#">Bigsteps</a></div>
              <h2 class="prd-title"><a href="# ">Non Contact Thermometer</a></h2>
              <div class="prd-description">
                Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
              </div>
            </div>
            <div class="prd-hovers">
              <div class="prd-circle-labels">
                <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                <div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
              </div>
              <div class="prd-price">
                <div class="price-new">$ 180</div>
                <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
              </div>
              <div class="prd-action">
                <div class="prd-action-left">
                  <form action="#">
                    <button class="btn js-prd-addtocart" data-product='{"name": "Non Contact Thermometer", "path":"images/skins/medical/products/23.png", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
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
            <a href="# " class="prd-img image-hover-scale image-container">
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/26.png" alt="Electronic Stethoscope" class="js-prd-img lazyload fade-up">
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/27.png" alt="Electronic Stethoscope" class="js-prd-img lazyload fade-up">
              <div class="foxic-loader"></div>
              <div class="prd-big-circle-labels">
              </div>
            </a>
            <div class="prd-circle-labels">
              <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
              <a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
            </div>
            <ul class="list-options color-swatch">
              <li data-image="images/skins/medical/products/26.png" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/26.png" class="lazyload fade-up" alt="Color Name"></a></li>
              <li data-image="images/skins/medical/products/27.png"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/products/27.png" class="lazyload fade-up" alt="Color Name"></a></li>
            </ul>
          </div>
          <div class="prd-info prd-info--pad">
            <div class="prd-info-wrap">
              <div class="prd-info-top">
                <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
              </div>
              <div class="prd-tag"><a href="#">FOXic</a></div>
              <h2 class="prd-title"><a href="# ">Electronic Stethoscope</a></h2>
              <div class="prd-description">
                Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
              </div>
            </div>
            <div class="prd-hovers">
              <div class="prd-circle-labels">
                <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                <div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
              </div>
              <div class="prd-price">
                <div class="price-new">$ 180</div>
                <div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
              </div>
              <div class="prd-action">
                <div class="prd-action-left">
                  <form action="#">
                    <button class="btn js-prd-addtocart" data-product='{"name": "Electronic Stethoscope", "path":"images/skins/medical/products/26.png", "url":"product.html", "aspect_ratio":0.778}'>Add To Cart</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>-->
      
      
      </div>
    </div>
  </div>
</div>