 <section class="cat-section bg-gray">
   <div class="container">
     <div class="row">
       @for ($i = 0; $i <= 5; $i++)
         <div class="col-lg-2">
           <div class="product-category mb-2">
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
