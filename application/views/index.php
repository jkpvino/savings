<!DOCTYPE html>
<html lang="en">
<head> 
  <!-- Metaheader -->
  <?php include ('frontend/metaheader.php'); ?>  
  <!-- End Metaheader -->
</head>

<body>
 
<div class="wrapper vertical-header">

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
 preloader -->

<!--=================================
 header -->
 
  <?php include ('frontend/leftsidebar.php'); ?> 

<!--=================================
 header -->


 
<!--=================================
 Banner-->
<?php include ('frontend/banner.php'); ?> 



 
<!--=================================
 footer -->
 <?php //include ('frontend/footer.php'); ?> 
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


<!-- -->


<!-- REVOLUTION JS FILES -->
<!-- <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script> -->

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<!-- <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="revolution/js/revolution.addon.particles.min.js"></script> -->

<!-- revolution custom --> 
<!-- <script src="revolution/js/revolution-custom.js"></script>  -->































 
<!-- custom -->
<script src="js/custom.js"></script>


<!-- Revolution Slider -->
<!--
<script type="text/javascript">
                  var revapi52,
                tpj=jQuery;
            tpj(document).ready(function() {
        if(tpj("#rev_slider_52_1").revolution == undefined){
          revslider_showDoubleJqueryError("#rev_slider_52_1");
        }else{
          revapi52 = tpj("#rev_slider_52_1").show().revolution({
            sliderType:"standard",
jsFileLocation:"//localhost/revslider-standalone/revslider/public/assets/js/",
            sliderLayout:"fullscreen",
            dottedOverlay:"none",
            delay:9000,
            particles: {startSlide: "first", endSlide: "last", zIndex: "1",
              particles: {
                number: {value: 80}, color: {value: "#000000"},
                shape: {
                  type: "circle", stroke: {width: 0, color: "#ffffff", opacity: 1},
                  image: {src: ""}
                },
                opacity: {value: 0.3, random: false, min: 0.25, anim: {enable: false, speed: 3, opacity_min: 0, sync: false}},
                size: {value: 10, random: true, min: 1, anim: {enable: false, speed: 40, size_min: 1, sync: false}},
                line_linked: {enable: true, distance: 200, color: "#000000", opacity: 0.2, width: 1},
                move: {enable: true, speed: 3, direction: "none", random: true, min_speed: 3, straight: false, out_mode: "out"}},
              interactivity: {
                events: {onhover: {enable: true, mode: "bubble"}, onclick: {enable: false, mode: "repulse"}},
                modes: {grab: {distance: 400, line_linked: {opacity: 0.5}}, bubble: {distance: 400, size: 150, opacity: 1}, repulse: {distance: 200}}
              }
            },
            navigation: {
              keyboardNavigation:"off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
              onHoverStop:"off",
              arrows: {
                style:"gyges",
                enable:true,
                hide_onmobile:false,
                hide_onleave:false,
                tmp:'',
                left: {
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:-20,
                                    v_offset:0
                },
                right: {
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:20,
                                    v_offset:0
                }
              }
            },
            responsiveLevels:[1240,1024,778,480],
            visibilityLevels:[1240,1024,778,480],
            gridwidth:[1240,1024,778,480],
            gridheight:[868,768,960,720],
            lazyType:"none",
            shadow:0,
            spinner:"off",
            stopLoop:"on",
            stopAfterLoops:0,
            stopAtSlide:1,
            shuffle:"off",
            autoHeight:"off",
            fullScreenAutoWidth:"off",
            fullScreenAlignForce:"off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "60px",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
              simplifyAll:"off",
              nextSlideOnWindowFocus:"off",
              disableFocusListener:false,
            }
          });
        }

                RsParticlesAddOn(revapi52);
      }); /*ready*/
    </script>
 !-->
 
</body>
</html>


 <script type="text/javascript">
  jQuery(document).ready(function(){    
    var windowheight = jQuery(window).height();
    jQuery(".home-page-banner").height(windowheight);
  });
  jQuery(document).ready(function(){    
    jQuery(window).resize(function(){
    var windowheight = jQuery(window).height();
    jQuery(".home-page-banner").height(windowheight);
    });
  });
 </script>