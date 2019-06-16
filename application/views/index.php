<!DOCTYPE html>
<html lang="en">
<head>
  <?php include ('frontend/metaheader.php'); ?>  
</head>
<body> 
<div class="wrapper vertical-header">
  <!-- preloader -->
    <div id="pre-loader">
        <img src="<?php echo base_url() ?>assests/frontend/images/pre-loader/loader-01.svg" alt="">
    </div>
  <!-- preloader -->

  <!-- header -->
  <?php include ('frontend/header.php'); ?>  
  <!-- header -->

  <?php include ('frontend/'.$body_content.'.php'); ?>
 
 
  <!-- footer --> 
  <?php include ('frontend/footer.php'); ?>
  <!--footer -->
 
 </div>

  

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div> 
<!-- jquery -->
<script src="<?php echo base_url() ?>assests/frontend/js/jquery-3.3.1.min.js"></script>
<!-- plugins-jquery -->
<script src="<?php echo base_url() ?>assests/frontend/js/plugins-jquery.js"></script>
<!-- plugin_path -->
<script>var plugin_path = '<?php echo base_url() ?>assests/frontend/js/';</script>
<!-- Google recaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script> 
<!-- custom -->
<script src="<?php echo base_url() ?>assests/frontend/js/custom.js"></script> 
</body>
</html>
<script type="text/javascript">
  /*jQuery(document).ready(function(){
    var newHeight = jQuery(window).height();
    jQuery(".popup-video-banner .row").height(newHeight);
  });*/
</script>