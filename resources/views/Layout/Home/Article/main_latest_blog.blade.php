
<div class="holder holder-mt-medium holder-with-bg holder-pt-medium holder-pb-medium bgcolor">
    <div class="container">
      <div class="title-with-arrows title-wrap text-left">
        <h2 class="h2-style"><a href="##" title="View all">LATEST BLOG POSTS</a></h2>
        <div class="carousel-arrows"></div>
      </div>
      <div class="post-prws post-prws-carousel post-prws--row js-post-prws-carousel" data-slick='{"slidesToShow": 3, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 2 }},{"breakpoint": 480,"settings": {"slidesToShow": 1 }}]}'>
      @foreach($blog_category as $blog)
        <div class="post-prw-vert col">
          <a href="blogpost/{{$blog->slug}}" class="post-prw-img image-hover-scale image-container" style="padding-bottom: 47.09%">
            <img class="lazyload fade-up w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{$img_url}}{{$blog->path}}" alt="Blog Post">
          </a>
          <h4 class="post-prw-title"><a href="##">{{$blog->title}}</a></h4>
          <div class="post-prw-links">
            <div class="post-prw-date"><i class="icon-calendar1"></i>
              MAY 18, 2021
            </div>
          </div>
        </div>
        
@endforeach
        <!-- <div class="post-prw-vert col">
          <a href="##" class="post-prw-img image-hover-scale image-container" style="padding-bottom: 47.09%">
            <img class="lazyload fade-up w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/blog/6.png" alt="Blog Post">
          </a>
          <h4 class="post-prw-title"><a href="##">What Is The Difference Between Antiseptic</a></h4>
          <div class="post-prw-links">
            <div class="post-prw-date"><i class="icon-calendar1"></i>
              June 23, 2020
            </div>
          </div>
        </div>
        <div class="post-prw-vert col">
          <a href="##" class="post-prw-img image-hover-scale image-container" style="padding-bottom: 47.09%">
            <img class="lazyload fade-up w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/blog/14.png" alt="Blog Post">
          </a>
          <h4 class="post-prw-title"><a href="##">How the Stethoscope Works</a></h4>
          <div class="post-prw-links">
            <div class="post-prw-date"><i class="icon-calendar1"></i>
              June 23, 2020
            </div>
          </div>
        </div>
        <div class="post-prw-vert col"> -->
          <!-- <a href="##" class="post-prw-img image-hover-scale image-container" style="padding-bottom: 47.09%">
            <img class="lazyload fade-up w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/medical/blog/13.png" alt="Blog Post">
          </a>
          <h4 class="post-prw-title"><a href="##">Are you washing your hands correctly?</a></h4>
          <div class="post-prw-links">
            <div class="post-prw-date"><i class="icon-calendar1"></i>
              June 17, 2020
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>