<!DOCTYPE html>
<html>
  <head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="<?php echo base_url();?>home/assets/vendors/images/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="<?php echo base_url();?>home/assets/vendors/images/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="<?php echo base_url();?>home/assets/vendors/images/favicon-16x16.png"
    />

    <!-- Mobile Specific Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>home/assets/vendors/styles/core.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo base_url();?>home/assets/vendors/styles/icon-font.min.css"
    />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>home/assets/vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
  </head>
  <style>
    .login-box.bg-white.box-shadow.border-radius-10.rtt-1 {
      max-width: 100%;
      box-shadow: none;
    }
    .lb-1 {
      font-size: 14px;
    }
  </style>
  <body class="login-page">
    <div
      class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5 col-lg-5">
            <img src="<?php echo base_url();?>home/assets/vendors/images/login-page-img.png" alt="" />
          </div>
          <div class="col-md-7 col-lg-7">
            <div class="login-box bg-white box-shadow border-radius-10 rtt-1">
              <div class="login-title">
                <h2 class="text-center text-primary">Register</h2>
              </div>
            <form role="form" enctype="multipart/form-data" method="post" action="">
                <div class="row">
                  <div class="col-md-6">
                    <div class="lb-1">
                      <label>Full Name</label>
                    </div>
                    <div class="input-group custom">
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="Full Name"value="<?php if(!empty($tax_data['fullname'])){echo $tax_data['fullname'];}else{echo '';}?>" name="fullname"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="lb-1">
                      <label>Username</label>
                    </div>
                    <div class="input-group custom">
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="Username" value="<?php if(!empty($tax_data['username'])){echo $tax_data['username'];}else{echo '';}?>" name="username"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="lb-1">
                      <label>Email</label>
                    </div>
                    <div class="input-group custom">
                      <input
                        type="email"
                        class="form-control form-control-lg"
                        placeholder="Email"value="<?php if(!empty($tax_data['email'])){echo $tax_data['email'];}else{echo '';}?>" name="email"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="lb-1">
                      <label>Password</label>
                    </div>
                    <div class="input-group custom">
                      <input
                        type="password"
                        class="form-control form-control-lg"
                        placeholder="password"value="<?php if(!empty($tax_data['password'])){echo $tax_data['password'];}else{echo '';}?>" name="password"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="lb-1">
                      <label>Confirm Password</label>
                    </div>
                    <div class="input-group custom">
                      <input
                        type="password"
                        class="form-control form-control-lg"
                        placeholder="password"value="<?php if(!empty($tax_data['cpassword'])){echo $tax_data['cpassword'];}else{echo '';}?>" name="cpassword"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="lb-1">
                      <label>Gender</label>
                    </div>
                    <div class="input-group custom">
                      <select class="form-control form-control-lg"value="<?php if(!empty($tax_data['gender'])){echo $tax_data['gender'];}else{echo '';}?>" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="lb-1">
                      <label>City</label>
                    </div>
                    <div class="input-group custom">
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="city" value="<?php if(!empty($tax_data['city'])){echo $tax_data['city'];}else{echo '';}?>" name="city"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="lb-1">
                      <label>State</label>
                    </div>
                    <div class="input-group custom">
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="state" value="<?php if(!empty($tax_data['state'])){echo $tax_data['state'];}else{echo '';}?>" name="state"
                      />
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="lb-1">
                      <label>Credit Card Type</label>
                    </div>
                    <div class="input-group custom">
                      <select class="form-control form-control-lg"value="<?php if(!empty($tax_data['card_type'])){echo $tax_data['card_type'];}else{echo '';}?>" name="card_type">
                        <option>lorem</option>
                        <option>lorem</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="lb-1">
                      <label>Credit Card No.</label>
                    </div>
                    <div class="input-group custom">
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="card number" value="<?php if(!empty($tax_data['card_number'])){echo $tax_data['card_number'];}else{echo '';}?>" name="card_number"
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="lb-1">
                      <label>CVV No.</label>
                    </div>
                    <div class="input-group custom">
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="cvv no."value="<?php if(!empty($tax_data['cvc'])){echo $tax_data['cvc'];}else{echo '';}?>" name="cvc"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="lb-1">
                      <label>Month</label>
                    </div>
                    <div class="input-group custom">
                      <select class="form-control form-control-lg"value="<?php if(!empty($tax_data['month'])){echo $tax_data['month'];}else{echo '';}?>" name="month">
                       <option value="01">January</option>
																<option value="02">February</option>
																<option value="03">March</option>
																<option value="04">April</option>
																<option value="05">May</option>
																<option value="06">June</option>
																<option value="07">July</option>
																<option value="08">August</option>
																<option value="09">September</option>
																<option value="10">October</option>
																<option value="11">November</option>
																<option value="12">December</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="lb-1">
                      <label>Year</label>
                    </div>
                    <div class="input-group custom">
                      <select class="form-control form-control-lg" value="<?php if(!empty($tax_data['year'])){echo $tax_data['year'];}else{echo '';}?>" name="year">
                        <option>2020</option>
																<option>2019</option>
																<option>2018</option>
																<option>2017</option>
																<option>2016</option>
																<option>2015</option>
																<option>2014</option>
																<option>2013</option>
																<option>2012</option>
																<option>2011</option>
																<option>2010</option>
																<option>2009</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group mb-0">
                     <input type="hidden" name="id" value="<?php if(!empty($tax_data['id'])){echo $tax_data['id'];}else{echo "";}?>">
               <button type="submit" name="submit"  class="btn btn-primary">Save</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- js -->
    <script src="<?php echo base_url();?>home/assets/vendors/scripts/core.js"></script>
    <script src="<?php echo base_url();?>home/assets/vendors/scripts/script.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/vendors/scripts/process.js"></script>
    <script src="<?php echo base_url();?>home/assets/vendors/scripts/layout-settings.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <!-- End Google Tag Manager (noscript) -->
  </body>
</html>
