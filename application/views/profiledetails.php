<!DOCTYPE html>
<html>
<head>
  </head>
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
                       
         <?php if(!empty($tax_data)) { 
      ?>
      <h4></h4>
      <?php 
        }
        else
        {
      ?>
      <h4></h4>
      <?php 
        }
      ?>
  		<div class="col-sm-4"><!--left col-->
           <div class="left-side">
            <div class="text-center">

                 <h6><?php  echo (!empty($tax_data['image'])?'<img class="avatar img-circle img-thumbnail" src='.base_url().'upload/branch/'.$tax_data['image'].'>':''); ?></h6>
                <h6>Upload a different photo...</h6>
                
            </div></hr><br>
                <!-- <div class="panel panel-default">
                    <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                    <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
                </div> -->
            <ul class="list-group">
                <li class="list-group-item text-muted">Personal Details <i class="fa fa-dashboard fa-1x"></i></li>
              <li class="list-group-item"><h5> First Name</h5>
      <span class="pull-left"><strong><?php echo !empty($tax_data['firstname']) ? $tax_data['firstname'] : ''; ?></strong></span> </li>
                <li class="list-group-item"> <h5>Last Name</h5><span class="pull-left"><strong><?php echo !empty($tax_data['lastname']) ? $tax_data['lastname'] : ''; ?></strong></span> </li>
                <li class="list-group-item"> <h5>Mobile Number</h5> <span class="pull-left"><strong><?php echo !empty($tax_data['mobile_no']) ? $tax_data['mobile_no'] : ''; ?></strong></span> </li>
                <li class="list-group-item"> <h5>Email</h5><span class="pull-left"><strong><?php echo !empty($tax_data['email']) ? $tax_data['email'] : ''; ?></strong></span> </li>
            </ul> 
                           </div>
        </div><!--/col-3-->
    	<div class="col-sm-8">
    	       <?php if(!empty($tax_data)) { 
      ?>
      <h4></h4>
      <?php 
        }
        else
        {
      ?>
      <h4></h4>
      <?php 
        }
      ?>
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
 <?php 
            if(isset($success) && !empty($success))
            {
              ?>
              <div class="alert alert-success" align="center">
              <strong><?php echo $success; ?></strong>
              </div>
            <?php   
            }
            if(isset($error) && !empty($error)){
            ?>
                <div class="alert alert-danger" align="center">
                <strong><?php echo $error; ?></strong>
                </div>
            <?php } ?>
          
                                    
                                    
                     <form role="form" enctype="multipart/form-data" method="post" action="">   
                           <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control"  value="<?php echo !empty($tax_data['firstname']) ? $tax_data['firstname'] : ''; ?>" name="firstname" id="firstname" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" value="<?php echo !empty($tax_data['lastname']) ? $tax_data['lastname'] : ''; ?>" name="lastname"  id="lastname" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" value="<?php echo !empty($tax_data['mobile_no']) ? $tax_data['mobile_no'] : ''; ?>" name="mobile_no"  id="mobile_no" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" value="<?php echo !empty($tax_data['email']) ? $tax_data['email'] : ''; ?>" name="email"  id="email" title="enter your email.">
                          </div>
                      </div>
                     
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" value="<?php echo !empty($tax_data['pwd']) ? $tax_data['pwd'] : ''; ?>" name="pwd" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                <!--        <div class="form-group">
                          <div class="col-xs-6">
                              <label for="password"><h4>GST Number</h4></label>
                              <input type="gst_number" class="form-control" value="<?php //echo !empty($tax_data['gst_number']) ? $tax_data['gst_number'] : ''; ?>" name="gst_number" id="gst_number" placeholder="gst_number" title="enter your gst_number.">
                          </div>
                      </div>  -->
                     
                       
                       
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Profile Image</h4></label>
                              <input type="file" class="form-control" value="<?php echo !empty($tax_data['image']) ? $tax_data['image'] : ''; ?>" name="image" id="image" placeholder="password" title="enter your password.">
                             <?php  echo (!empty($tax_data['image'])?'<img src='.base_url().'/upload/team1/'.$tax_data['image'].' style="width:50px;height:50px">':''); ?>

                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
<input type="hidden" name="id" value="<?php if(!empty($tax_data['id'])){echo $tax_data['id'];}else{echo "";}?>">
               <button type="submit" name="submit"  class="btn btn-primary">Save</button>
                                          </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">
            		
               	
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	
                            </div>
                      </div>
              	</form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->
        </div><!--/col-9-->
    </div>
</div>
</section>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<!-- footer start -->

<?php include 'footer.php';?>

<!-- footer close -->

<script>
$(document).ready(function(){
   $("#editprofile").click(function(){
       var userid="<?php echo !empty($user_porfile['id']) ? $user_porfile['id'] : ''; ?>";
       var firstname=$("#firstname").val();
       var lastname=$("#lastname").val();
       var email=$("#email").val();
       var mobile_no=$("#mobile_no").val();
       var password=$("#password").val();
        $.ajax({
                type: "POST",
                url: "https://invoice-o.com/organisation/Welcome/updateProfile",
                data: {"firstname":firstname,"lastname":lastname,"email":email,"id":id,"mobile_no":mobile_no,"password":password},
                dataType:'json',
                success: function(response) {
                  //if(response.satus == 1){
                      $('#exampleModalhtml').html("<p class='text-center text-success'>Profile Updated Sucessfully</p>");
                      //$('#exampleModal').modal('show');
                    setTimeout(function(){location.href="<?php echo base_url();?>Welcome/profileUser", 5000} ); 
                 //}else{
                      //alert(response.msg);
                  //}
                }
            });
    });
    $("#profile-pic").change(function(e){
        //preview
       // $("#myform").submit();
         //e.preventDefault();
         var file_data = $(this).prop('files')[0];
         //console.log(file_data);
         var form_data = new FormData();
         form_data.append('image', file_data);
         console.log(form_data);
        $.ajax({
            type: "POST",
                url: "<?php echo base_url();?>Welcome/updateProfile",
                data: form_data,
                dataType:'json',
                processData: false,
                contentType: false,
                success: function(response) {
                 // if(response.satus == 1){
                      $('#exampleModalhtml').html("<p class='text-center text-success'>Profile Updated Sucessfully</p>");
                    setTimeout(function(){location.href="<?php echo base_url();?>home/profileUser", 5000} ); 
                 // }else{
                      //alert(response.msg);
                  //}
                }
            });
        //return false;
    });
});
</script>
 <div style="padding: 0px 22px;">
                <div class="footer-wrap pd-20 mb-20 card-box ">
                    DeskApp - Bootstrap 4 Admin Template By
                    <a href="https://github.com/dropways" target="_blank">Sveltose Technology</a>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome modal start -->
    <div class="welcome-modal">
        <button class="welcome-modal-close">
            <i class="bi bi-x-lg"></i>
        </button>
        <iframe class="w-100 border-0" src="https://embed.lottiefiles.com/animation/31548"></iframe>
        <div class="text-center">
            <h3 class="h5 weight-500 text-center mb-2">
                Open source
                <span role="img" aria-label="gratitude">❤️</span>
            </h3>
            <div class="pb-2">
                <a class="github-button" href="" data-color-scheme="no-preference: dark; light: light; dark: light;"
                    data-icon="octicon-star" data-size="large" data-show-count="true"
                    aria-label="Star dropways/deskapp dashboard on GitHub">Star</a>
                <a class="github-button" href="/fork"
                    data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-repo-forked"
                    data-size="large" data-show-count="true"
                    aria-label="Fork dropways/deskapp dashboard on GitHub">Fork</a>
            </div>
        </div>
        <div class="text-center mb-1">
            <div>
                <a href="" target="_blank" class="btn btn-light btn-block btn-sm">
                    <span class="text-danger weight-600">STAR US</span>
                    <span class="weight-600">ON GITHUB</span>
                    <i class="fa fa-github"></i>
                </a>
            </div>
            <script async defer="defer" src="https://buttons.github.io/buttons.js"></script>
        </div>
        <a href="" target="_blank" class="btn btn-success btn-sm mb-0 mb-md-3 w-100">
            DOWNLOAD
            <i class="fa fa-download"></i>
        </a>
        <p class="font-14 text-center mb-1 d-none d-md-block">
            Available in the following technologies:
        </p>
        <div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
            <i class="fa fa-html5"></i>
        </div>
    </div>

    <!-- welcome modal end -->
    <!-- js -->
    <script src="<?php echo base_url();?>home/assets/vendors/scripts/core.js"></script>
    <script src="<?php echo base_url();?>home/assets/vendors/scripts/script.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/vendors/scripts/process.js"></script>
    <script src="<?php echo base_url();?>home/assets/vendors/scripts/layout-settings.js"></script>
    <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <!-- buttons for Export datatable -->
    <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/vfs_fonts.js"></script>
    <!-- Datatable Setting js -->
    <script src="<?php echo base_url();?>home/assets/vendors/scripts/datatable-setting.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- switchery js -->
    <script src="<?php echo base_url();?>home/assets/src/plugins/switchery/switchery.min.js"></script>
    <!-- bootstrap-tagsinput js -->
    <script src="<?php echo base_url();?>home/assets/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <!-- bootstrap-touchspin js -->
    <script src="<?php echo base_url();?>home/assets/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="<?php echo base_url();?>home/assets/vendors/scripts/advanced-components.js"></script>


