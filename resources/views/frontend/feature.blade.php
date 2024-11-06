<section class="page_sec_pad_25 appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
  <div class="container">
    <h2 class="section-title ls-n-10 pb-3 m-b-4 text-center">New In</h2>


    <div class="product-container">
      @for ($i = 0; $i <12; $i++)
        <div class="product-card">
          @include('frontend.partial.product_card')
        </div>
      @endfor
    </div>
  </div>
</section>
