<!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
      
        <!-- Sidebar -->
        <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
          <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
          </div>
          <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
          </div>
          <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
          <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
              <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                    <img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" class="img-circle elevation-2" alt="User Image" style="height: 2rem;object-fit: cover">
                  </div>
                  <div class="info">
                      <?php if($_settings->userdata('login_type')==3)  { ?>
                      <a href="" class="d-block"><?php echo ucwords($_settings->userdata('membername')) ?></a>
                      <?php }else{ ?>
                    <a href="<?php echo base_url ?>admin/?page=user" class="d-block"><?php echo ucwords($_settings->userdata('firstname').' '.$_settings->userdata('lastname')) ?></a>
                  <?php } ?>
                  </div>
                </div>
                <!-- Sidebar Menu -->
                 <?php if($_settings->userdata('login_type')==2)  { ?>
                <nav class="mt-2">
                   <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item dropdown">
                      <a href="./" class="nav-link nav-home">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard
                        </p>
                      </a>
                    </li> 
                    <li class="nav-header">Member</li>
                     <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=member" class="nav-link nav-inquiries">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                          All Member 
                        </p>
                      </a>
                    </li>
              <?php } ?>
              
               <?php if($_settings->userdata('login_type')==1)  { ?>
                <nav class="mt-2">
                   <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item dropdown">
                      <a href="./" class="nav-link nav-home">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard
                        </p>
                      </a>
                    </li> 
                       <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=banner" class="nav-link nav-banner">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                          Banner

                        </p>
                      </a>
                    </li>
                    
                     <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=traks" class="nav-link nav-traks">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                          Traks

                        </p>
                      </a>
                    </li>
                     <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=watersports" class="nav-link nav-watersports">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                          Watersports

                        </p>
                      </a>
                    </li>
                    
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=caravan-tours" class="nav-link nav-caravan-tours">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                          Caravan Tours

                        </p>
                      </a>
                    </li>
                    
                     
                    
                     <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=backpacking" class="nav-link nav-backpacking">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                          Backpacking & Tours

                        </p>
                      </a>
                    </li>
                     <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=stay" class="nav-link nav-stay">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                         Stay

                        </p>
                      </a>
                    </li>
                  
                     <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=inquiries" class="nav-link nav-inquiries">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                          All Enquiry 
                        </p>
                      </a>
                    </li>
              <?php } ?>
              
                <?php if($_settings->userdata('login_type')==3)  { ?>
                <nav class="mt-2">
                   <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item dropdown">
                      <a href="./" class="nav-link nav-home">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard
                        </p>
                      </a>
                    </li> 
                   
              <?php } ?>
                 
	
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar-corner"></div>
        </div>
        <!-- /.sidebar -->
      </aside>
      <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      page = page.split('/');
      page = page[0];
      if(s!='')
        page = page+'_'+s;

      if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
        if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

      }
     
    })
  </script>