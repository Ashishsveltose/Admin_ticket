 <?php  
  $session_userdata = $this->session->userdata(USER_SESSION); 
  //($session_userdata);//shop_id
  ?>
<style>
.sidebar-light .sidebar-menu .dropdown-toggle:hover, .sidebar-light .sidebar-menu .show>.dropdown-toggle, .sidebar-light .sidebar-menu .submenu li a.active, .sidebar-light .sidebar-menu .submenu li a:hover {
    color: #fff;
    background-color: #f43c05 !important;
}
</style>

<div class="right-sidebar">
    <div class="sidebar-title">
      <h3 class="weight-600 font-16 text-blue">
        Layout Settings
        <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
      </h3>
      <div class="close-sidebar" data-toggle="right-sidebar-close">
        <i class="icon-copy ion-close-round"></i>
      </div>
    </div>
    <div class="right-sidebar-body customscroll">
      <div class="right-sidebar-body-content">
        <h4 class="weight-600 font-18 pb-10">Header Background</h4>
        <div class="sidebar-btn-group pb-30 mb-10">
          <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
          <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
        </div>

        <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
        <div class="sidebar-btn-group pb-30 mb-10">
          <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
          <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
        </div>

        <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
        <div class="sidebar-radio-group pb-10 mb-10">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
              value="icon-style-1" checked="" />
            <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
              value="icon-style-2" />
            <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
              value="icon-style-3" />
            <label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
          </div>
        </div>

        <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
        <div class="sidebar-radio-group pb-30 mb-10">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input"
              value="icon-list-style-1" checked="" />
            <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input"
              value="icon-list-style-2" />
            <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                aria-hidden="true"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input"
              value="icon-list-style-3" />
            <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input"
              value="icon-list-style-4" checked="" />
            <label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input"
              value="icon-list-style-5" />
            <label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input"
              value="icon-list-style-6" />
            <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
          </div>
        </div>

        <div class="reset-options pt-30 text-center">
          <button class="btn btn-danger" id="reset-settings">
            Reset Settings
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="left-side-bar">
    <div class="brand-logo">
      
      <a href="#">
        <?php if(!empty($session_userdata)){ ?>
         <img src="<?php echo base_url();?>upload/team1/".<?php echo !empty($session_userdata['image']) ? $session_userdata['image'] : '
                        Profile'; ?>
  alt="" class="dark-logo" />         
        <img src="<?php echo base_url();?>home/assets/vendors/images/logoo.png" alt="" class="dark-logo" />
        <?php }else{?>
        <img src="<?php echo base_url();?>home/assets/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo" />
      <?php
  } ?>
      </a>
      <div class="close-sidebar" data-toggle="left-sidebar-close">
        <i class="ion-close-round"></i>
      </div>
    </div>
    <div class="menu-block customscroll">
      <div class="sidebar-menu">
        <ul id="accordion-menu">
         <li class="dropdown">
            <a href="#" class="dropdown-toggle no-arrow">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Dashboard</span>
            </a>
          </li>
          <li class="dropdown">
            <a  class="dropdown-toggle">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Articles</span>
            </a>
                       <ul class="submenu">
            <li><a href="<?php echo base_url();?>articlelist">List</a></li>
            <li><a href="<?php echo base_url();?>articlepending">New Pending</a></li>
            <li><a href="<?php echo base_url();?>updatepending">Update Pending</a></li>

            </ul>
            <li class="dropdown">
            <a href="<?php echo base_url();?>commentlist" class="dropdown-toggle no-arrow">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Comments</span>
            </a>
          </li>
           <li class="dropdown">
            <a href="<?php echo base_url();?>artcategorylist" class="dropdown-toggle no-arrow">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Categories</span>
            </a>
          </li>
           <li class="dropdown">
            <a href="<?php echo base_url();?>arteventlist" class="dropdown-toggle no-arrow">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Event</span>
            </a>
          </li>
       <li class="dropdown">
            <a href="<?php echo base_url();?>tagslist" class="dropdown-toggle no-arrow">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Tags</span>
            </a>
          </li>

           <li class="dropdown">
            <a href="<?php echo base_url();?>pageslist" class="dropdown-toggle no-arrow">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Pages</span>
            </a>
          </li>

           <li class="dropdown">
            <a href="<?php echo base_url();?>welcome/about/4" class="dropdown-toggle no-arrow">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">About Us</span>
            </a>
          </li>
           <li class="dropdown">
            <a href="<?php echo base_url();?>notificationlist" class="dropdown-toggle no-arrow">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Notification</span>
            </a>
          </li>
       <li class="dropdown">
            <a href="<?php echo base_url();?>chatlist" class="dropdown-toggle no-arrow">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Chat</span>
            </a>
          </li>

            <li class="dropdown">
            <a href="#" class="dropdown-toggle no-arrow">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Membership Plan</span>
            </a>
          </li>
        <!--  <li class="dropdown">
            <a href="#" class="dropdown-toggle no-arrow">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Feed</span>
            </a>
          </li>-->

           
           <li class="dropdown">
            <a href="<?php echo base_url();?>adslist" class="dropdown-toggle no-arrow">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Ads</span>
            </a>
          </li>
           <li class="dropdown">
            <a  class="dropdown-toggle">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Users</span>
            </a>
                       <ul class="submenu">
            <li><a href="<?php echo base_url();?>artuserlist">List</a></li>
            <li><a href="<?php echo base_url();?>article_user">Add</a></li>
            <li><a href="<?php echo base_url();?>refferrallist">Referrels</a></li>

            </ul>
             </li>
              <li class="dropdown">
            <a href="<?php echo base_url();?>profile" class="dropdown-toggle no-arrow">
              <span class="micon bi bi-hdd-stack"></span><span class="mtext">Setting</span>
            </a>
          </li>
              </ul>
      </div>
    </div>
  </div>
 