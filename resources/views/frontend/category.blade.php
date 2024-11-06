 <section class="cat-section page_sec_pad_25 bg-gray">
   <div class="container">
     <h2 class="section-title ls-n-10 pb-3 m-b-4 text-center">Top Categories</h2>
     <div class="row">
       @for ($i = 0; $i <= 5; $i++)
         <div class="col-lg-2">
           <div class="product-category">
             <a href="demo21-shop.html">
               <div class="category-content">
                 <img src="{{ asset('frontend/img/categories/image.png') }}" alt="">
                 <h3>Fashion</h3>
               </div>
             </a>
           </div>
         </div>
       @endfor

     </div>
   </div>
 </section>
