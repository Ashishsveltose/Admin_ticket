<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Color Picker</title>

    
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
		<link
			rel="stylesheet"
			type="text/css"
			href="<?php echo base_url();?>home/assets/src/plugins/jquery-asColorPicker/dist/css/asColorPicker.css"
		/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>home/assets/vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
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

<link rel="stylesheet" type="text/css" href="path/to/spectrum.css">
<script type="text/javascript" src="path/to/spectrum.js"></script>
<body>
   <?php
  include('header.php');
  ?>
  <?php
  include('sidebar.php');
  ?>
 <div class="mobile-menu-overlay"></div>

    <div class="main-container">

        <div class="xs-pd-20-10 pd-ltr-20">

            <div class="title pb-20">
            </div>
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    <div class="card-box mb-30">

<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>
									Header Color

									</label>
									<input
										type="text"
										class="colorpicker form-control"
										value="#7ab2fa"
									/>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>
										Footer Color
									</label>
									<input
										type="text"
										class="complex-colorpicker form-control"
										value="#7ab2fa"
									/>
								</div>
							</div>
                            	<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>
										Button Color
									</label>
									<input
										type="text"
										class="complex-colorpicker form-control"
										value="#7ab2fa"
									/>
								</div>
							</div>
							</div>
                                 <button style="margin-bottom: 160px;" type="button" class="btn btn-primary add-more" id="yesButton">Next</button>

						</div>
					</div>
				</div>

</body>

		<script src="<?php echo base_url();?>home/assets/vendors/scripts/core.js"></script>
		<script src="<?php echo base_url();?>home/assets/vendors/scripts/script.min.js"></script>
		<script src="<?php echo base_url();?>home/assets/vendors/scripts/process.js"></script>
		<script src="<?php echo base_url();?>home/assets/vendors/scripts/layout-settings.js"></script>
		<script src="<?php echo base_url();?>home/assets/src/plugins/jquery-asColor/dist/jquery-asColor.js"></script>
		<script src="<?php echo base_url();?>home/assets/src/plugins/jquery-asGradient/dist/jquery-asGradient.js"></script>
		<script src="<?php echo base_url();?>home/assets/src/plugins/jquery-asColorPicker/jquery-asColorPicker.js"></script>
		<script src="<?php echo base_url();?>home/assets/vendors/scripts/colorpicker.js"></script>
		<!-- Google Tag Manager (noscript) -->
<script>
    $(document).ready(function(){
        $("#colorPicker").spectrum();
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $("#yesButton").click(function() {
            window.location.href = 'https://invoice-o.com/websoft/aboutus';
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#noButton").click(function() {
            window.location.href = 'https://invoice-o.com/websoft/addslider';
        });
    });
</script>





<script>
    $(document).ready(function(){
        $("#colorPicker").spectrum({
            color: "#ff0000",  // Initial color
            showInput: true,   // Show the color input field
            showPalette: true, // Show a palette of basic colors
            preferredFormat: "hex" // Output format
        });
    });
</script>
</html>