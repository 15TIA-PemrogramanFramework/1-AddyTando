

<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Magnificent login form a Flat Responsive Widget Template :: w3layouts</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Magnificent login form a Flat Responsive Widget,Login form widgets, Sign up Web  forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="<?php echo base_url('assets/login/') ?>css/style.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
<link rel="stylesheet" href="<?php echo base_url('assets/login/') ?>css/font-awesome.css"><!--fontawesome-->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"><!--online fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet"><!--online fonts-->
</head>
<body>
  <div class="w3ls-main">
    <div class="wthree-heading">
      <h1>Sistem Informasi Murid</h1>
    </div>
      <div class="wthree-container">
        <div class="wthree-form">
          <div class="agileits-2">
            <h2>login</h2>
          </div>
          <?php echo validation_errors(); ?>
      <?php 
      $attributes = array('class' => 'form login');
      echo form_open('verifylogin', $attributes); 
      ?>
            <div class="w3-user">
              <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
              <input type="text" name="username" placeholder="username" required="">
            </div>  
            <div class="clear"></div>
            <div class="w3-psw">
              <span><i class="fa fa-key" aria-hidden="true"></i></span>
              <input type="password" name="password" placeholder="password" required="">
            </div>
            <div class="clear"></div>
            <div class="w3l">
             
            </div>
            <div class="clear"></div>
            <div class="w3l-submit">
              <input type="submit" value="login">
            </div>
            <div class="clear"></div>
          </form>
        </div>
      </div>
  </div>
    <div class="agileits-footer">
      <p>&copy; Magnificent login Form. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
</body>
</html>





  