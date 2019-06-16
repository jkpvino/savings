
<section id="homesection"></section>
 
<div class="menu-responsive"><a href="#"> <b>Bluefills</b></a> <a class="but" href="#"><span class="ti-menu"></span> </a></div>

<header id="left-header" class="header vertical-menu">
 
<!--=================================
 mega menu -->

<div id="onepagenav" class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu" data-pos='vertical-left'>
    <!-- menu list items container -->
    <section class="menu-list-items"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="index-01.html"><img id="logo_img" src="<?php echo base_url() ?>assests/frontend/images/logo.png" alt=""> </a>
            </li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
         <ul class="menu-links">
          <?php if (isUserLogged()) { ?>
            
            <li class="active"><a href="#top">Home</a></li>
            <li><a href="#about-us">About us</a></li>
            <li><a href="#portfolio">Schemes</a></li>
            <li><a href="#contact-us">Contact us</a></li>
            <li><a href="http://bluefills.com/index.php/index/login">Login / Register</a></li>
            <li><a href="#login">Login / Register</a></li>
          <?php }else{ ?>             
            <li><a href="<?php echo base_url().'index/myaccount' ?>">Myaccount</a></li>
          <?php } ?>
        </ul>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
<div class="menu-widgets text-white"> 
  <div class="social-icons social-border rounded color-hover text-center">
    <ul>
      <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
      <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
      <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
    </ul>
  </div>
</div>

</header>
