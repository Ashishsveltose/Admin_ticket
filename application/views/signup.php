<!DOCTYPE html>
<html lang="en">

<head>

	<title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="<?php echo base_url();?>home/assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="<?php echo base_url();?>home/assets/css/style.css">
	
	


</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
         <div style="display:flex; justify-content:center">
                      <img src="https://chauffit.com/manager/images/xytr.jpg" style="width:180px;height:90px" alt="24"/>
					  </div>
						<h4 class="mb-3 f-w-400 mt-2">Sign up</h4>
<form role="form" enctype="multipart/form-data" method="post" action="">
<div class="form-group mb-3">
							<label class="floating-label" for="Username"> </label>
							<input type="file" class="form-control" id="" placeholder="" value="<?php if(!empty($tax_data['logo'])){echo $tax_data['logo'];}else{echo '';}?>" name="logo">
						</div>
<div class="form-group mb-3">
							<label class="floating-label" for="Username">Company Name</label>
							<input type="text" class="form-control" id="Company Name" placeholder="" value="<?php if(!empty($tax_data['company_name'])){echo $tax_data['company_name'];}else{echo '';}?>" name="company_name">
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="Username">Requestor Name</label>
							<input type="text" class="form-control" id="Requestor Name" placeholder="" value="<?php if(!empty($tax_data['c_name'])){echo $tax_data['c_name'];}else{echo '';}?>" name="c_name">
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Phone No</label>
							<input type="tel" class="form-control" id="Phone Number" placeholder="" value="<?php if(!empty($tax_data['phone_no'])){echo $tax_data['phone_no'];}else{echo '';}?>" name="phone_no">
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email address</label>
							<input type="email" class="form-control" id="Email" placeholder="" value="<?php if(!empty($tax_data['email'])){echo $tax_data['email'];}else{echo '';}?>" name="email">
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Address</label>
							<input type="text" class="form-control" id="Email" placeholder="" value="<?php if(!empty($tax_data['address'])){echo $tax_data['address'];}else{echo '';}?>" name="address">
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">City</label>
							<input type="text" class="form-control" id="Email" placeholder="" value="<?php if(!empty($tax_data['city'])){echo $tax_data['city'];}else{echo '';}?>" name="city">
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" class="form-control" id="pwd" placeholder="" value="<?php if(!empty($tax_data['pwd'])){echo $tax_data['pwd'];}else{echo '';}?>" name="pwd">
						</div>
						
<input type="hidden" name="id" value="<?php if(!empty($tax_data['id'])){echo $tax_data['id'];}else{echo "";}?>">
     <button type="submit" name="submit"  class="btn btn-primary">Submit</button>                              
						<p class="mb-2">Already have an account? <a href="https://chauffit.com/requester/" class="f-w-400">Signin</a></p>
					</div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="<?php echo base_url();?>home/assets/js/vendor-all.min.js"></script>
<script src="<?php echo base_url();?>home/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>home/assets/js/ripple.js"></script>
<script src="<?php echo base_url();?>home/assets/js/pcoded.min.js"></script>



</body>

</html>
