<!-- START:: INCLUDING THE HEADER -->
<?php include('./layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: HEDAER IMAGE SECTION -->
<div class="header_img_wraper">
  <img src="assets/media/pic2.jpg" alt="Intro Img">

  <!-- START:: SECTION CURVE -->
  <div class="section_svg">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
    </svg>
  </div>
  <!-- END:: SECTION CURVE -->
</div>
<!-- END:: HEDAER IMAGE SECTION -->

<!-- START:: AUTH PAGE -->
<div class="auth_forms_wraper">
  <div class="container">
    <div class="row justify-content-center">

      <div id="login_form_wraper" class="col-11 col-md-6">
        <div class="header_wraper">
          <h2> Login </h2>
        </div>

        <form action="" class="login">
          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#D0AF85" d="M44.5,-48.5C55.3,-43.9,60.3,-27.7,60.5,-12.7C60.7,2.3,56.2,16.1,50,30.8C43.8,45.5,35.9,61.2,23.6,66.3C11.3,71.5,-5.4,66.1,-16.8,57.2C-28.1,48.2,-34.2,35.7,-40.7,23.8C-47.2,11.9,-54.2,0.5,-57.8,-15.5C-61.3,-31.5,-61.3,-52.3,-51.1,-57C-40.9,-61.7,-20.4,-50.5,-1.8,-48.3C16.8,-46.1,33.6,-53.1,44.5,-48.5Z" transform="translate(100 100)" />
          </svg>

          <div class="form_overlay">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email Or Usename">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password">
            </div>

            <div class="btn_box">
              <button> Sign In </button>
            </div>

            <div class="btn_box">
              <span id="show_register"> 
                Dont't Have An Account? Register Now
              </span>
            </div>

            <div class="btn_box">
              <span id="show_reset"> 
                Forget Your Password?
              </span>
            </div>
          </div>
        </form>
      </div>

      <div id="signup_form_wraper" class="col-11 col-md-6" style="display: none;">
        <div class="header_wraper">
          <h2> Registration </h2>
        </div>

        <form action="" class="sign_up">
          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#D0AF85" d="M44.5,-48.5C55.3,-43.9,60.3,-27.7,60.5,-12.7C60.7,2.3,56.2,16.1,50,30.8C43.8,45.5,35.9,61.2,23.6,66.3C11.3,71.5,-5.4,66.1,-16.8,57.2C-28.1,48.2,-34.2,35.7,-40.7,23.8C-47.2,11.9,-54.2,0.5,-57.8,-15.5C-61.3,-31.5,-61.3,-52.3,-51.1,-57C-40.9,-61.7,-20.4,-50.5,-1.8,-48.3C16.8,-46.1,33.6,-53.1,44.5,-48.5Z" transform="translate(100 100)" />
          </svg>

          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#D0AF85" d="M44.5,-48.5C55.3,-43.9,60.3,-27.7,60.5,-12.7C60.7,2.3,56.2,16.1,50,30.8C43.8,45.5,35.9,61.2,23.6,66.3C11.3,71.5,-5.4,66.1,-16.8,57.2C-28.1,48.2,-34.2,35.7,-40.7,23.8C-47.2,11.9,-54.2,0.5,-57.8,-15.5C-61.3,-31.5,-61.3,-52.3,-51.1,-57C-40.9,-61.7,-20.4,-50.5,-1.8,-48.3C16.8,-46.1,33.6,-53.1,44.5,-48.5Z" transform="translate(100 100)" />
          </svg>

          <div class="form_overlay">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Usename">
            </div>

            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" placeholder="Confirm Password">
            </div>

            <div class="btn_box">
              <button> Sign Up </button>
            </div>

            <div class="form-group d-flex flex-column justify-content-center align-items-center">
              <p> Or Enter With </p>
              <ul class="list-unstyled">
                <li> 
                  <a href="#">
                    <img src="assets/media/icons/facebook.png">
                  </a> 
                </li>
                <li> 
                  <a href="#">
                    <img src="assets/media/icons/instagram.png">
                  </a> 
                </li>
                <li> 
                  <a href="#">
                    <img src="assets/media/icons/youtube.png">
                  </a> 
                </li>
                <li> 
                  <a href="#">
                    <img src="assets/media/icons/twitter.png">
                  </a> 
                </li>
              </ul>
            </div>
          </div>
        </form>
      </div>

      <div id="reset_form_wraper" class="col-11 col-md-6" style="display: none;">
        <div class="header_wraper">
          <h2> Reset Password </h2>
        </div>

        <form action="" class="reset">
          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#D0AF85" d="M44.5,-48.5C55.3,-43.9,60.3,-27.7,60.5,-12.7C60.7,2.3,56.2,16.1,50,30.8C43.8,45.5,35.9,61.2,23.6,66.3C11.3,71.5,-5.4,66.1,-16.8,57.2C-28.1,48.2,-34.2,35.7,-40.7,23.8C-47.2,11.9,-54.2,0.5,-57.8,-15.5C-61.3,-31.5,-61.3,-52.3,-51.1,-57C-40.9,-61.7,-20.4,-50.5,-1.8,-48.3C16.8,-46.1,33.6,-53.1,44.5,-48.5Z" transform="translate(100 100)" />
          </svg>

          <div class="form_overlay">
            <div class="form-group">
              <input type="mail" class="form-control" placeholder="Enter An Email">
            </div>

            <div class="btn_box">
              <button> send confirmation </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END:: AUTH PAGE -->


<!-- START:: INCLUDING THE FOOTER -->
<?php include('./layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->