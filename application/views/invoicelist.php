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
                           
                                <div class="card-box pb-10">
                                    <table class="table nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                             <th>Invoice No</th>
                                                <th>Username</th>
                                              <th>Organisation<br>name</th>
                                                <th>Amount</th>
                                              <th>Reason</th>
                                              <th>Payment Status</th>
                                              <th>Created Date</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php
                                          $count = 1; 
                  if(!empty($taxlist)){
                    foreach ($taxlist as $getdata) { 
                      
                     // $category1 = $this->Common_model->getSingleRecordById('org_list',array('id'=> $getdata['user_id']));
//$catewgory1 = $tyhis->Common_model->getSingleRecordsById('org_list',array['id'=> $getdata('user_id1')]);
                    $category2 = $this->Common_model->getSingleRecordById('org_feed',array('id'=> $getdata['org_name']));

                                        $category1 = $this->Common_model->getSingleRecordById('org_list',array('id'=> $getdata['user_id']));
                      
                                          ?>
                    <tr>
                      <td><?php echo $count; ?>
                      </td>
                      
                      
                      <td><?php  echo (!empty($getdata['invoice_no'])?$getdata['invoice_no']:'none'); ?></td>
                      <td><?php  echo (!empty($category1['firstname'])?$category1['firstname']:'none'); ?></td>
                    
                      <td><?php  echo (!empty($category2['org_name'])?$category2['org_name']:'none'); ?></td>
                       <td><?php  echo (!empty($getdata['amount'])?$getdata['amount']:'none'); ?></td>
                      <td><?php  echo (!empty($getdata['reason'])?$getdata['reason']:'none'); ?></td>
                      <td>
                        <?php if($getdata['status']==0){echo "pending";}
                                if($getdata['status']==1){echo "success";}
                          ?>
                      </td>
                      
                       <td><?php  echo (!empty($getdata['created_date'])?$getdata['created_date']:'none'); ?></td>

                      
                        <td>
                          
                 <!--      <a href="<?php //echo base_url() ?>welcome/edit_invoice/<?php //echo  $getdata['id']; ?>" title="Edit"><i class="fas fas-pencil">edit</i></a>  -->
                        
 <!--<a href="javascript:void(0)" href-data="<?php //echo  $getdata['id']; ?>" class="dropdown-itemm" title="Delete"><i class="dw dw-delete-3" aria-hidden="true"></i></a>  -->
                                 
           <a href="<?php echo base_url() ?>welcome/viewinvoice/<?php echo  $getdata['user_id']; ?>" title="view"> <img src="<?php echo base_url();?>home/assets/vendors/images/view.png" alt="" class="dark-logo" style="width:20px;height:20px;"/></a>  
                               
                       <?php if($getdata['cancal_status']==0){echo "success";}
                                if($getdata['cancal_status']==1){echo "cancalled";}
                          ?>
                      

                      </td>
                                          </tr>                 
                             
                    
                                           
                                         <?php $count++; 
                  }
                }
                ?>                                                              </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

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