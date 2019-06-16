
<!--=================================
 login-->

<section id="login" class="page-section-ptb bg-overlay-white-70 login-signup parallax home-page-banner" style="background: url(<?php echo base_url() ?>assests/frontend/images/login/07.jpg);">>
  <div class="container">
     <div class="row justify-content-center">
       <div class="col-lg-6 col-md-8">
        <div class="tab tab-border nav-center">
         <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true"> <i class="fa fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false"><i class="fa fa-user"></i> Profile </a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="login" role="tabpanel" aria-labelledby="login-tab">
              <div class="login-box-02 white-bg">
                <div class="pb-50 clearfix">
                   <h4 class="mb-30"> Login </h4>
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
                      <a href="#" class="button btn-block">
                        <span>Log in</span>
                        <i class="fa fa-check"></i>
                     </a>
                  </div>
                  <div class="login-social text-center clearfix">
                    <ul>
                        <li><a class="fb" href="#"> Facebook</a></li>
                        <li><a class="twitter" href="#"> Twitter</a></li>
                        <li><a class="pinterest" href="#"> google+</a></li>
                    </ul>
                  </div>
                 </div>
            </div>
            <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
              <div class="login-box-02 white-bg">
              <div class="pb-50 clearfix">
                 <h4 class="mb-30">Signup</h4>
                  <div class="row">
                   <div class="section-field mb-20 col-sm-6">
                     <label class="mb-10" for="name">First name* </label>
                       <input id="name" class="web form-control" type="text" placeholder="First name" name="web">
                    </div>
                     <div class="section-field mb-20 col-sm-6">
                     <label class="mb-10" for="name">Last name* </label>
                       <input id="name" class="web form-control" type="text" placeholder="Last name" name="web">
                    </div>
                  </div>
                  <div class="section-field mb-20">
                       <label class="mb-10" for="name">Email* </label>
                        <input type="email" placeholder="Email*" class="form-control" name="email">
                   </div>
                  <div class="section-field mb-20">
                   <label class="mb-10" for="Password">Password* </label>
                     <input id="Password" class="Password form-control" type="password" placeholder="Password" name="Password">
                  </div>
                    <a href="#" class="button btn-block">
                      <span>Signup</span>
                      <i class="fa fa-check"></i>
                   </a>
                </div>
                <div class="login-social text-center clearfix">
                  <ul>
                      <li><a class="fb" href="#"> Facebook</a></li>
                      <li><a class="twitter" href="#"> Twitter</a></li>
                      <li><a class="pinterest" href="#"> google+</a></li>
                  </ul>
                </div>
               </div>
            </div>
          </div>
        </div>
        </div>
      </div>
  </div>
</section>

<!--=================================
 login-->
 