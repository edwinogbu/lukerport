<?php require_once("config.php") ?>
<?php require_once("templates/head.php") ?>


<body>
   <div style="margin-top:150px; background-color: #fff;"  class="account container-fluid">
    <?php require_once("templates/header.php") ?>
         <div id=""  class="container  hero-area-bg">
            <div class="text-center">
                <h2 class="section-title text-center wow fadeInDown text-dark" data-wow-delay="0.3s">Account Opening Form</h2>
            </div>
            
            <?php
                if (isset($_SESSION['errors'])) {
                    $errors = $_SESSION['errors'];
                    $old = $_SESSION['old'];
                    echo "<ul class='alert alert-danger text-center'>";
                    foreach($errors as $error) {
                        echo "<li>$error</li>";
                    }
                    echo "</ul>";
                    unset($_SESSION['errors']);
                    unset($_SESSION['old']);
                } elseif (isset($_SESSION['success'] )) {
                    echo "<div class='alert alert-success'>{$_SESSION['success']}</div>";
                    unset($_SESSION['success']);
                }
            ?>
            <form method="post" action="account-opening-processor.php">
       
            <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <input type="text" class="form-control" id="title" name="title" placeholder="Title " required="" value="<?php echo $old['title'] ?: '' ?>" data-error="Please enter your Title">
             <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-md-10">
            <div class="form-group">
              <input type="text" placeholder="Surname" id="surname" class="form-control" name="sname" required="" value="<?php echo $old['sname'] ?: '' ?>" data-error="Please enter your surname">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="fname" placeholder="First name" id="firstname" class="form-control" required="" value="<?php echo $old['fname'] ?: '' ?>" data-error="Please enter your firstname">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="mname" placeholder="Middle name" id="middlename" class="form-control" required="" value="<?php echo $old['mname'] ?: '' ?>" data-error="Please enter your middle name">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="bname" placeholder="Business name" id="businessname" class="form-control" required="" value="<?php echo $old['bname'] ?: '' ?>" data-error="Please enter your business name">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="baddress" placeholder="Business address" id="businessaddress" class="form-control" value="<?php echo $old['baddress'] ?: '' ?>" required="" data-error="Please enter your business address">
              <div class="help-block with-errors"></div>
            </div>
          </div>
            <div class="col-md-4">
            <div class="form-group">
              <input type="text" class="form-control" id="city" name="city" placeholder="City " required="" value="<?php echo $old['city'] ?: '' ?>" data-error="Please enter your city">
             <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <input type="text" placeholder="State" id="state" class="form-control" name="state" required="" value="<?php echo $old['state'] ?: '' ?>" data-error="Please enter your state">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" placeholder="Residential address" id="residential" class="form-control" name="residential" value="<?php echo $old['residential'] ?: '' ?>" required="" data-error="Please enter your residential address">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" placeholder="Phone" id="phone" class="form-control" name="phone" required="" value="<?php echo $old['phone'] ?: '' ?>" data-error="Please enter your phone number">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" placeholder="Email" id="email" class="form-control" name="email" required="" value="<?php echo $old['email'] ?: '' ?>" data-error="Please enter your email">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" name="identification" type="radio" <?php echo $old['identification'] === 'National ID' ? 'checked' : '' ?> data-error="Please enter and Identification" value="National ID" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                   National ID
                  </label>
                   <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
             <div class="form-check">
                  <input class="form-check-input"  name="identification" type="radio" value="Driver’s License" <?php echo $old['identification'] === 'Driver’s License' ? 'checked' : '' ?> required data-error="Please an Identification" id="defaultCheck2" >
                  <label class="form-check-label" for="defaultCheck2">
                   Driver’s License
                  </label>
                   <div class="help-block with-errors"></div>
            </div>
        </div>
      <div class="col-md-2">
        <div class="form-check">
          <input class="form-check-input"  name="identification" type="radio" value="International Passport" <?php echo $old['identification'] === 'International Passport' ? 'checked' : '' ?> required data-error="Please an Identification" id="defaultCheck3" >
          <label class="form-check-label" for="defaultCheck3">
           International Passport
          </label>
           <div class="help-block with-errors"></div>
        </div>
      </div> 
      <div class="col-md-2">
       <div class="form-check">
          <input class="form-check-input"  name="identification" type="radio" value="Voter’s card" <?php echo $old['identification'] === 'Voter’s card' ? 'checked' : '' ?> required data-error="Please an Identification" id="defaultCheck4" >
          <label class="form-check-label" for="defaultCheck4">
           Voter’s card
          </label>
           <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-2">
       <div class="form-check">
          <input class="form-check-input"  name="identification" type="radio" value="Others" <?php echo $old['identification'] === 'Others' ? 'checked' : '' ?> required data-error="Please an Identification" id="defaultCheck5" >
          <label class="form-check-label" for="defaultCheck5">
           Others
          </label>
              <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-6">
       <div class="form-group">
          <input name="issued" class="form-control" type="text" placeholder="Issue Date DD/MM/YYYY" required value="<?php echo $old['issued'] ?: '' ?>" data-error="Please an Issue Date" id="issued" >
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-6">
       <div class="form-group">
            <input   name="expiry" class="form-control" placeholder=" Expiry Date DD/MM/YYYY" required type="text" value="<?php echo $old['expiry'] ?: '' ?>" data-error="Please an Expiry Date" id="expiry" >              <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="submit-button text-center m-3">
              <button class="btn btn-common" name="submit" id="form-submit" type="submit">Open Account</button>
              <!--<div id="msgSubmit" class="h3 text-center hidden"></div>-->
              <div class="clearfix"></div>
        </div>
      </div>
            
               
               
           
            
          </div>
            </form>    
        </div>
    <div class="container">
      <div class="row">
         
    </div>
  </div>
  
   <!-- Topfooter Section Start -->
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-2 col-xs-12">
          <div class="footer-logo">
            <img src="<?php echo URL ?>assets/img/LUKEPORT-LOGO.png" alt="">
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-12">
          <div class="social-icon text-center">
            <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
            <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
            <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
            <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-12">
          <p class="float-right">Powered By <a href="#" rel="nofollow">Lukeport</a></p>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12">
            <p class="">
                <a class="text-white px-2 " href="#FAQ">
                    FAQ
                </a>
                <a class="text-white px-2" href="terms-and-condition.php">
                    TERM AND CONDITIONS
                </a>
            </p>
                    
        </div>
      </div>
    </div>
  </div>
 
     
    </div>
  <!-- Copyright Section End -->
  <?php require_once('templates/form-modal.php') ?>
  <?php require_once('templates/team-modal.php') ?>
  <?php require_once('templates/footer-modal.php') ?>
  <!-- Go to Top Link -->
  <a href="#" class="back-to-top">
    <i class="lni-arrow-up"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader">
    <div class="loader" id="loader-1"></div>
  </div>
  <!-- End Preloader -->

  <?php require_once('templates/footer.php') ?>
   
</body>