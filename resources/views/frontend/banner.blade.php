<section class="intro-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 mt-1">
        <div class="category_section p-2 box_shadow rad_5">
          @for ($i = 0; $i <= 15; $i++)
            <div>Airpods</div>
          @endfor
        </div>
      </div>
      <div class="col-lg-10">
        <div class="aiz-carousel gutters-10 banner-slider" data-items="1" data-arrows='true' data-dots='true' data-infinite='true'>
          @for ($i = 0; $i <= 5; $i++)
            <div class="item">
              <img src="{{ asset('frontend/img/banners/image 4.png') }}" alt="">
            </div>
          @endfor
          <!-- End .home-slide -->
        </div>
      </div>
    </div>
  </div>

</section>
