<!-- 
<section class="slider-parallax popup-video-banner bg-overlay-black-50 parallax" style="background: url(<?php echo base_url() ?>assests/frontend/images/bg/03.jpg);">
  <div class="slider-content-middle">
  <div class="container">
     <div class="row">
        <div class="col-lg-12 col-md-12">
         <div class="slider-content text-left">
          <h1 class="text-white"> <span class="theme-color"> THIRUMALA JEWELLERY </span> <br /> SAVINGS SCHEME</h1>
          <p class="text-white mt-20">You Pay for 11 Months We will pay for the 12th Month.</p>
           <div class="mt-20">
             <a class="button" href="#schemes"> read more </a>
           </div>
          </div>
         </div>
        </div>
     </div>
  </div>
  <a class="scroll-down move" title="Scroll Down" href="#about-us"><i></i></a>
</section>   -->

<div class="owl-carousel bg-overlay-black-50"  data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
  <?php for ($i=0; $i < 5 ; $i++) { ?>    
    <!-- ITEM -->
    <div class="item popup-video-banner">
        <div class="row"> <img class="" src="<?php echo base_url() ?>assests/frontend/images/bg/03.jpg" alt=""> </div>
        <div class="content " style="position: absolute; top: 10%"> 
          <div class="col-lg-12 col-md-12">
            <div class="slider-content text-left">
              <h1 class="text-white"> <span class="theme-color"> THIRUMALA JEWELLERY </span> <br /> SAVINGS SCHEME</h1>
              <p class="text-white mt-20">You Pay for 11 Months We will pay for the 12th Month.</p>
              <div class="mt-20">
               <a class="button" href="#schemes"> read more </a>
              </div>
            </div>
          </div>          
        </div>
        <div style="position: absolute; bottom: 0; right: 0; left: 0; margin: 0 auto;"> <a class="scroll-down move" title="Scroll Down" href="#about-us"><i></i></a> </div>
    </div>
  <?php } ?>
</div>

<style type="text/css">
.popup-video-banner .row img{ width: 100%; }  
/*.popup-video-banner .row {
    height: 608px;
}
.popup-video-banner .row {
    height: 100%;
}*/
</style>
