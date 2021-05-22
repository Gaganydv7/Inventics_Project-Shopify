@php
  $counter=0;
@endphp
  <div class="page-content">
    <div class="holder fullwidth fullboxed mt-0 full-nopad">
      <div class="container">
        <div class="bnslider-wrapper">
          <div class="bnslider keep-scale" data-start-width='1920' data-start-height='770' data-start-mwidth='900' data-start-mheight='650' id="bnslider-01" data-autoplay="true" data-speed="15000">

          @php
    $subcounter=0;
    @endphp
    @for($i=$counter;$i<count($sliders);$i++)
    @if($subcounter<4)
            <div class="bnslider-slide" data-autoplay="true" data-video-type="video">
              <div class="bnslider-image-mobile lazyload fade-up-fast" data-bgset="{{$img_url}}{{$sliders[$i]->path}}"></div>
              <div class="bnslider-image lazyload fade-up-fast" data-bgset="{{$img_url}}{{$sliders[$i]->path}}"></div>

              <div class="bnslider-text-wrap bnslider-overlay container">
                <div class="bnslider-text-content txt-middle txt-center txt-middle-m txt-center-m">
                  <div class="bnslider-text-content-flex container">
                    <div class="bnslider-vert w-s-90 w-ms-100">
                      <div class="bnslider-text order-1 mt-0 bnslider-text--lg text-left heading-font" data-animation="zoomIn" data-animation-delay="800" data-fontcolor="#000000" data-fontweight="900" data-fontline="1.2" data-otherstyle=""></div>
                      <div class="bnslider-text order-2 mt-0 bnslider-text--lg text-left heading-font" data-animation="zoomIn" data-animation-delay="1000" data-fontcolor="#000000" data-fontweight="900" data-fontline="1" data-otherstyle=""><span class="custom-color">{{$sliders[$i]->title}}</span> </div>
                      <div class="bnslider-text order-3 mt-sm bnslider-text--xxs text-left  d-none d-md-block" data-animation="fadeInUp" data-animation-delay="1600" data-fontcolor="#282828" data-fontweight="400" data-fontline="1.6" data-otherstyle=""><span style="color: whitesmoke;"> {{$sliders[$i]->sub_title}}</span></div>
                      <div class="btn-wrap text-left  order-4 mt-md" data-animation="fadeIn" data-animation-delay="2000">
                        <a href="##" target="_self" class="btn">
                          Shop now
                        </a>
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

            <!-- <div class="bnslider-slide" data-autoplay="true" data-video-type="video">
              <div class="video-wrap">
                <video playsinline loop muted preload="auto">
                  <source src="https://cdn.shopify.com/s/files/1/0201/0942/6742/files/coverr-cleaning-hands-with-sanitizer-1583825391933.mp4?v=1592911532" type="video/mp4">
                </video>
              </div>
              <div class="bnslider-text-wrap bnslider-overlay container">
                <div class="bnslider-text-content txt-middle txt-center txt-middle-m txt-center-m">
                  <div class="bnslider-text-content-flex containe ">
                    <div class="bnslider-vert">
                      <div class="bnslider-text order-1 mt-sm bnslider-text--xl  text-center  " data-animation="fadeInUp" data-animation-delay="800" data-fontcolor="#ffffff" data-fontweight="900" data-fontline="1.00" data-otherstyle="">Antiseptic</div>
                      <div class="bnslider-text order-2 mt-sm bnslider-text--xl  text-center  " data-animation="fadeInUp" data-animation-delay="1000" data-fontcolor="#ffffff" data-fontweight="900" data-fontline="1.00" data-otherstyle="">Hand <span class="custom-color">Sanitizer</span></div>
                      <div class="btn-wrap text-center  order-4 mt-lg" data-animation="fadeIn" data-animation-delay="2000">
                        <a href="##" target="_self" class="btn" data-color="#000000" data-bgcolor="#ffffff" data-hover-bgcolor="#33cad5" style="color:#000000; background-color:#ffffff">
                          Shop now
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

          </div>
          <div class="bnslider-loader"></div>
          <div class="bnslider-arrows d-sm-none container">
            <div></div>
          </div>
          <div class="bnslider-dots d-none d-sm-block container"></div>
        </div>
      
      </div>
    </div>
   