<!DOCTYPE html>
<html lang="en">
<head>
  <?php include ('frontend/metaheader.php'); ?>  
</head>
<body> 
<div class="wrapper vertical-header">
  <!-- preloader -->
    <div id="pre-loader">
        <img src="images/pre-loader/loader-01.svg" alt="">
    </div>
  <!-- preloader -->

  <!-- header -->
  <?php include ('frontend/header.php'); ?>  
  <!-- header -->
 
  <!-- banner -->
  <?php include ('frontend/banner.php'); ?> 
  <!-- banner -->
 
  <!-- About-->
  <?php include ('frontend/about-us.php'); ?> 
  <!-- About-->

  <!-- SERVICES  -->
  <?php include ('frontend/services.php'); ?>
  <!-- SERVICES -->

<!-- portfolio -->
<?php include ('frontend/schemes.php'); ?>
<!-- portfolio -->

  <!-- portfolio -->
  <?php include ('frontend/login.php'); ?>
  <!-- portfolio -->
 
<!-- contact  -->
<section id="contact-us" class="white-bg contact-3 clearfix o-hidden">
   <!-- =============================== -->
   <div class="container-fluid pos-r">
    <div class="row full-height">
    <div class="col-lg-6 map-side g-map" id="map" data-type='black'>
       <div class="contact-map">
     </div>       
    </div>
   </div>
  </div>
  <div class="container">
  <div class="row justify-content-end">
      <div class="col-lg-5"> 
      <div class="contact-3-info page-section-ptb">
       <div class="clearfix">
          <div class="section-title mb-0">
           <h6>let's work together </h6>
           <h2 class="title-effect">Let’s Get In Touch!</h2>
          </div> 
           <p class="mb-50">It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you! We reply within <span class="tooltip-content-2" data-original-title="Mon-Fri 10am–7pm (GMT +1)" data-toggle="tooltip" data-placement="top"> 24 hours!</span></p>
            <div id="formmessage">Success/Error Message Goes Here</div>
             <form id="contactform" role="form" method="post" action="php/contact-form.php">
               <div class="contact-form clearfix">
                  <div class="section-field">
                    <input id="name" type="text" placeholder="Name*" class="form-control"  name="name">
                   </div> 
                   <div class="section-field">
                      <input type="email" placeholder="Email*" class="form-control" name="email">
                    </div>
                   <div class="section-field">
                      <input type="text" placeholder="Phone*" class="form-control" name="phone">
                    </div>
                   <div class="section-field textarea">
                     <textarea class="input-message form-control" placeholder="Comment*"  rows="7" name="message"></textarea>
                    </div>
                    <!-- Google reCaptch-->
                    <div class="g-recaptcha section-field clearfix" data-sitekey="[Add your site key]"></div>
                    <input type="hidden" name="action" value="sendEmail"/>
                     <button id="submit" name="submit" type="submit" value="Send" class="button"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
                    </div> 
                  </form>
                 <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="images/pre-loader/loader-02.svg" alt=""></div>
              </div>          
         </div>
    </div>
    </div>
    </div>
</section>

<!-- contact -->

 
 
<!--=================================
 footer -->
 
<footer class="footer footer-one-page page-section-pt black-bg">
 <div class="container">
  <div class="row text-center">
   <div class="col-lg-4 col-md-4">
      <div class="contact-add mb-30"> 
       <div class="text-center">
           <i class="ti-map-alt text-white"></i>
           <h5 class="mt-15">Address</h5>
           <p>17504 Carlton Cuevas Rd, Gulfport, MS, 3950</p>
          </div>
      </div>
   </div>
   <div class="col-lg-4 col-md-4">
      <div class="contact-add mb-30"> 
       <div class="text-center">
         <i class="ti-mobile text-white"></i>
         <h5 class="mt-15">Call Us</h5>
         <p>+(704) 279-1249</p>
        </div>
      </div>
   </div>
   <div class="col-lg-4 col-md-4">
      <div class="contact-add mb-30"> 
        <div class="text-center">
         <i class="ti-email text-white"></i>
         <h5 class="mt-15">Email Us</h5>
         <p>letstalk@webster.com</p>
       </div>
      </div>
   </div>
   </div>
    <div class="row justify-content-center">
    <div class="col-lg-4 col-md-7">
       <div class="footer-Newsletter text-center mt-30 mb-40">
          <div id="mc_embed_signup_scroll">
            <form action="php/mailchimp-action.php" method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
             <div id="msg"> </div>                 
              <div id="mc_embed_signup_scroll_2">
                <input id="mce-EMAIL" class="form-control" type="text" placeholder="Email address" name="email1" value="">
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_b7ef45306f8b17781aa5ae58a_6b09f39a55" tabindex="-1" value="">
                </div>
                <div class="clear">
                  <button type="submit" name="submitbtn" id="mc-embedded-subscribe" class="button button-border mt-20 form-button">  Get notified </button>
                </div>
              </form>
            </div>
            </div>
     </div>
    </div>
   <div class="footer-widget mt-20">
    <div class="row">
      <div class="col-lg-6 col-md-6">
      <p class="mt-15">&copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Webster </a> All Rights Reserved</p>
      </div>
      <div class="col-lg-6 col-md-6 text-center text-md-right">
        <div class="footer-widget-social">
         <ul> 
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i> </a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
         </ul>
       </div>
      </div>
    </div>    
  </div>
  </div>
</footer>

<!--=================================
 footer -->
 
 </div>

  

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div> 
 
<!--=================================
 jquery -->

<!-- jquery -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/';</script>

<!-- Google recaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>
 
<!-- custom -->
<script src="js/custom.js"></script>

 
 
</body>
</html>
<script type="text/javascript">
  jQuery(document).ready(function(){
    var newHeight = jQuery(window).height();
    jQuery(".popup-video-banner .row").height(newHeight);
  });
</script>