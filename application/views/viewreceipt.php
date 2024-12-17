<!DOCTYPE html>
<html>

<head>
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
                          
                            <div class="col-md-12">
                              <!--<div class="col-6">-->
                                <div class="pd-20 float-right">
                               <!--     <a href="https://invoice-o.com/organisation/add_pay" class="dropdown-toggle no-arrow">
                                        <button type="button" class="btn btn-primary">Add</button>-->
                                    </a> 
                              </div>
                              <!--   </div> -->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
				     
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Layout</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Invoice</a></li>
						
					</ol>
                </div>
                <button class="btn btn-primary" style="margin-right:20px;" id="pdfButton"><b>Generate PDF</b></button>
                 <div class="row"  id="generatePDF">
                    <div class="col-lg-12">
                
                        <!--<div class="card mt-3">
                            <div class="card-header"> Invoice <strong>01/01/01/2018</strong> <span class="float-end">
                                    <strong>Status:</strong> Pending</span> </div>-->
                            <div class="card-body">
                                <div class="row mb-5">
                                    
                                    
                                    <div class="mt-4 col-xl-9 col-lg-9 col-md-9 col-sm-12">
                                          <div class="mb-4"><a href="#" class="brand-logo">
				
				
				<div style=  margin-right: 150px;
 class="col-sm-9"> 
                       <?php if(!empty($tax_data1)) { 
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
  	
										
                                              </div>  
				
		 <?php  echo (!empty($tax_data1['image'])?'<img src='.base_url().'/upload/team1/'.$tax_data1['image'].' style="width:100px;height:100px">':''); ?>

											
		<!--<p class="mb-0" style="font-size:20px"><b>GST - 132-875-812</b></p>
		<p class="mb-0" style="font-size:20px"><b>Address: 85 Russell Road, Manurewa, Auckland</b></p>
		<p class="mb-0" style="font-size:20px"><b>Email: profoundnz@gmail.com</b></p>-->
		
				
            </a></div>
             <div class="mb-4"><a href="#" class="brand-logo">
											
		<h4 style="font-size:20px"><b>Invoice -o</b></h4>
		

				
            </a></div>
            <?php $count = 1; 
                  if(!empty($showdetails)){
                    foreach ($showdetails as $getdata) { 
                      $category1 = $this->Common_model->getSingleRecordById('org_list',array('id'=> $getdata['user_id']));
                      $category2 = $this->Common_model->getSingleRecordById('org_list',array('id'=> $getdata['user_id1']));
                     // $category2 = $this->Common_model->getSingleRecordById('student',array('id'=> $getdata['user_id']));
                     //  $total=$getdata['qty']*$getdata['total'];
                     
                  ?>
 
             <div class="mb-4"><a href="#" class="brand-logo">
                 
				<h4 style="font-size:20px"><b>Bill To:</b></h4>							
		<p class="mb-0" style="font-size:20px"><b><?php  echo (!empty($category1['firstname'])?$category1['firstname']:'none'); ?></b></p>
		<p class="mb-0" style="font-size:20px"><b><?php  echo (!empty($category1['address'])?$category1['address']:'none'); ?></b></p>

				
            </a></div>
            
                                        
                                    </div>
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                     	<h1 style="font-size:20px"><b>Invoice</b></h1>
											<span class="mb-1" style="font-size:20px"><b>Date:</b>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php  echo (!empty($getdata['created_date'])?$getdata['created_date']:'none'); ?></b></span> 
											<!--	<span class="mb-2" style="font-size:20px"></h1><b> Paid:</b></h1>&nbsp;&nbsp;<b><?php // echo (!empty($getdata['due_bal'])?$getdata['due_bal']:'none'); ?></b></span> -->
											
										
												
											<span class="d-block" style="font-size:20px"><b>Invoice No.:</b>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php  echo (!empty($getdata['invoice_no'])?$getdata['invoice_no']:'none'); ?>
                                              
                                              </b></span>
                                        
                                        
                                    </div>
                                    
               
                
                
                
              
            
            
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="font-size:20px" class="center">Username</th>
                                                
                                                <th style="font-size:20px">Organisation Name</th>
                                                <th style="font-size:20px">Amount</th>
                                                <th style="font-size:20px" class="right">Reason</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                              <td style="font-size:20px" class="center"><b><?php  echo (!empty($category1['firstname'])?$category1['firstname']:'none'); ?></b></td>
                                                  
                                                
                                                <td style="font-size:20px" class="center"><b><?php  echo (!empty($category2['firstname'])?$category2['firstname']:'none'); ?></b></td>
                                                
                                                <td style="font-size:20px" class="right"><b><?php  echo (!empty($getdata['amount'])?$getdata['amount']:'none'); ?></b></td>
                                                <td style="font-size:20px" class="right"><b><?php  echo (!empty($getdata['reason'])?$getdata['reason']:'none'); ?></b></td>
                                            </tr>
                                          <!--  <tr>
                                                
                                        <!--      <td style="font-size:20px" class="center"><b></b></td>
                                                  
                                                
                                                <td style="font-size:20px" class="center"><b></b></td>
                                                <td style="font-size:20px" class="left strong"><b></b></td>
                                                
                                                <td style="font-size:20px" class="right"><b></b></td>
                                                <td style="font-size:20px" class="right"><b> 
                                                   
                                                   
                                                   </b></td>-->
                                        <!--    </tr>
                                     
                                            <tr>
                                                
                                              <td style="font-size:20px" class="center"><b></b></td>
                                                  
                                                
                                                <td style="font-size:20px" class="center"><b></b></td>
                                                <td style="font-size:20px" class="left strong"><b></b></td>
                                                
                                                <td style="font-size:20px" class="right"><b></b></td>
                                                <td style="font-size:20px" class="right"><b> 
                                                   
                                                   
                                                    </b></td>
                                            </tr> -->    
                                          
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5"> </div>
                                    <div class="col-lg-4 col-sm-5 ms-auto">
                                        <table class="table table-clear">
                                            <tbody>
                                                <tr class="mb-0">
                                                    <td style="font-size:20px" class="left"><strong>Total</strong></td>
                                                    <td style="font-size:20px" class="right"><?php  echo (!empty($getdata['amount'])?$getdata['amount']:'none'); ?></td>
                                                </tr>
                                               <tr class="mb-0">
                                                    <td style="font-size:20px" class="left"><strong>Paid</strong></td>
                                                    <td style="font-size:20px" class="right"><?php  echo (!empty($getdata['partial_amt'])?$getdata['partial_amt']:'none'); ?></td>
                                                </tr>
                                                 <tr class="mb-0">
                                                    <td style="font-size:20px" class="left"><strong>unpaid</strong></td>
                                                    <td style="font-size:20px" class="right"><?php  echo (!empty($getdata['all_total'])?$getdata['all_total']:'none'); ?></td>
                                                </tr>
                                            
                                                  <tr class="mb-0">
                                                    <td style="font-size:20px" class="left"><strong>Status</strong></td>
                                                    <td style="font-size:20px" class="right">
                                                    <?php if($getdata['status']==0){echo "pending";}
                                if($getdata['status']==1){echo "success";}
                          ?>
                      
                                                    </td>
                                                 <!--   <tr class="mb-0">
                                                    <td style="font-size:20px" class="left"><strong>Paid</strong></td>
                                                    <td style="font-size:20px" class="right"></td>
                                                </tr>-->
                                              
                                               <!-- <tr class="mb-0">
                                                    <td style="font-size:20px" class="left"><strong></strong></td>
                                                    <td style="font-size:20px" class="right"><strong></strong><br>
                                                        </td>
                                                </tr>-->
                                                    <?php $count++; 
                  }
                }
                ?> 
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div>
                                <!--    <h4>Bank Details:</h4>
                                        <h4>Account Name: Profund Immigration Advice
</h4>
                                            <h4>Account Number:12-3489-0051391-00</h4>
                                                <h4>If you have any queries, please email us on profoundnz@gmail.com</h4>
                                                <h4>Thank you for your business.</h4>-->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        
    <script>
      var button = document.getElementById("pdfButton");
      var makepdf = document.getElementById("generatePDF");
      button.addEventListener("click", function () {
         var mywindow = window.open("", "PRINT", "height=600,width=600");
         mywindow.document.write(makepdf.innerHTML);
         mywindow.document.close();
         mywindow.focus();
         mywindow.print();
         return true;
      });
   </script>    
        
        
        
        
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <div class="footer-wrap pd-20 mb-20 card-box">
                    DeskApp - Bootstrap 4 Admin Template By
                    <a href="https://github.com/dropways" target="_blank">Sveltose Technology</a>
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
                        data-color-scheme="no-preference: dark; light: light; dark: light;"
                        data-icon="octicon-repo-forked" data-size="large" data-show-count="true"
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
  <script type="text/javascript">
$(document).ready(function(){
  $(function () {

    $('#customertable').DataTable({

      "paging": true,

      "lengthChange": false,

      "searching": true,

      "ordering": true,

      "info": true,

      "autoWidth": false

    });
  });
  $(".dropdown-itemm").click(function(e){
    var val = confirm("Are you sure, you want to delete record ?");
    if (val == true){
      window.location.reload();
    }
    
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>welcome/deleteRecord",
        data:{table:'pending_pay',id:id,status:3,colwhr:'id',whrstatuscol:'status',action:"Delete"},
        dataType:'json',
        success: function(response) {
          if (response.status == 1){
            $.notify(response.msg, "success");
            setTimeout(function(){location.reload()},1000);
          }else{
            $.notify(response.msg, "error");
          }
        }
      });
    }
  });
  $(".deactive").click(function(e){
        var val = confirm("Are you sure, you want to deactivate customer ?");
        if (val == true){
      window.location.reload();
    }
    
        //e.preventDefault(); 
        var id = $(this).attr("href-data");
        //alert(href);
        //var btn = this;
        if(val){
            $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>welcome/change_status",
              data:{tablename:'customer',id:id,status:0,whrcol:'id',whrstatuscol:'status',action:"Deactive"},
              dataType:'json',
              success: function(response) {
                if (response.status == 1){
                  $.notify(response.msg, "success");
                  setTimeout(function(){location.reload()},1000);
                }else{
                  $.notify(response.msg, "error");
                }
              }
          });
        }
  });
  $(".useractive").click(function(e){
    var val = confirm("Are you, sure you want to activate organisation ?");
    if (val == true){
      window.location.reload();
    }
    
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>admin/welcome/change_status",
        data:{tablename:'visafee',id:id,status:1,whrcol:'id',whrstatuscol:'status',action:"Active"},
        dataType:'json',
        success: function(response) {
          if (response.status == 1){
            $.notify(response.msg, "success");
            setTimeout(function(){location.reload()},1000);
          }else{
            $.notify(response.msg, "error");
          }
        }
      });
    }
  });
});
</script>

</body>

</html>