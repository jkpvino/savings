
<!--=================================
login -->

<section class="login white-bg o-hidden scrollbar">
  <div class="container-fluid p-0">
    <div class="row row-eq-height no-gutter height-100vh">
      <div class="col-lg-6 parallax" style="background-image: url(<?php echo base_url() ?>assests/frontend/images/login/08.jpg);">
      </div>
      <div class="col-lg-6">
        <div class="vertical-align full-width">
        <div class="login-14">
          <h1>We are webster</h1>
          <p class="mb-30">Welcom back, please login to your account.</p>
          <div class="pb-50 clearfix white-bg">
           <div class="section-field mb-20">
             <label class="mb-10" for="name">User name* </label>
               <input id="name" class="web form-control" type="text" placeholder="User name" name="web">
            </div>
            <div class="section-field mb-20">
             <label class="mb-10" for="Password">Password* </label>
               <input id="Password" class="Password form-control" type="password" placeholder="Password" name="Password">
            </div>
            <div class="section-field">
              <div class="remember-checkbox mb-30">
                 <input type="checkbox" class="form-control" name="two" id="two" />
                 <label for="two"> Remember me</label>
                 <a href="password-recovery.html" class="float-right">Forgot Password?</a>
                </div>
              </div>
              <a href="#" class="button">
                <span>Log in</span>
                <i class="fa fa-check"></i>
             </a>
             <p class="mt-20 mb-0">Don't have an account? <a href="<?php echo base_url().'index/register' ?>"> Create one here</a></p>
          </div>
        </div>
      </div>
     </div>
    </div>
  </div>
</section>

<!--=================================
 login -->
  