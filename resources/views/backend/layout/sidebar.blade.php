<!-- Sidebar starts -->
      <div class="sidebar">
      
        <div class="sidey">
      
          <!-- Logo -->
          <div class="logo">
            <h1><a href="index.html"><i class="fa fa-desktop br-red"></i> Admin <span>{{Auth::user()->name}}</span></a></h1>
          </div>
          
          <!-- Sidebar navigation starts -->
          
          <!-- Responsive dropdown -->
          <div class="sidebar-dropdown"><a href="#" class="br-red"><i class="fa fa-bars"></i></a></div>
          
          <div class="side-nav">
          
            <div class="side-nav-block">
              <!-- Sidebar heading -->
              <h4>Main</h4>
              <!-- Sidebar links -->
              <ul class="list-unstyled">
                <li><a href="{{route('admin.dashboard')}}" class="active"><i class="fa fa-desktop"></i> Dashboard</a></li>
        
                <li><a href="{{route('add.location')}}"><i class="fa fa-wrench"></i> Add New Location</a></li>
                <li><a href="#"><i class="fa fa-wrench"></i> View Locations</a></li>
                 <!-- Mainmenu with submenu -->
                <li class="has_submenu">
                  <a href="#"><i class="fa fa-list"></i> Category <span class="nav-caret fa fa-caret-down"></span></a>
                  <!-- Submenu -->
                  <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>View</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Add Category</a></li>
  
                  </ul>
                </li>

                <li class="has_submenu">
                  <a href="#"><i class="fa fa-list"></i> Sub-Category <span class="nav-caret fa fa-caret-down"></span></a>
                  <!-- Submenu -->
                  <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>View</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Add Subcategory</a></li>
  
                  </ul>
                </li>
                 <!-- Mainmenu with submenu -->
                <li class="has_submenu">
                  <a href="#"><i class="fa fa-product-hunt"></i> Products <span class="nav-caret fa fa-caret-down"></span></a>
                  <!-- Submenu -->
                  <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>View</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Add Product</a></li>
  
                  </ul>
                </li>
               


                <li><a href="users.html"><i class="fa fa-user"></i> Users</a></li>
                <!-- Mainmenu with submenu -->
            
                <!-- Mainmenu with submenu -->
                <li class="has_submenu">
                  <a href="#"><i class="fa fa-envelope"></i> Message <span class="nav-caret fa fa-caret-down"></span></a>
                  <!-- Submenu -->
                  <ul class="list-unstyled">
                    <li><a href="inbox.html"><i class="fa fa-angle-double-right"></i> Inbox</a></li>
                    <li><a href="mail-read.html"><i class="fa fa-angle-double-right"></i> Mail Read</a></li>
                    <li><a href="mail-write.html"><i class="fa fa-angle-double-right"></i> Mail Compose</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            
            <div class="side-nav-block">
              <h4>Menu</h4>
              <ul class="list-unstyled">
                <li><a href="0-base.html"><i class="fa fa-desktop"></i> Blank Page</a></li>
                <li><a href="login.html"><i class="fa fa-sign-in"></i> Login</a></li>
                <li><a href="404.html"><i class="fa fa-times"></i> Error Page</a></li>
                <li><a href="grid.html"><i class="fa fa-th-large"></i> Grids</a></li>
                <li><a href="lock.html"><i class="fa fa-lock"></i> Lock</a></li>
              </ul>
            </div>
            
            
          </div>
          
          <!-- Sidebar navigation ends -->
          
        </div>
      </div>
      <!-- Sidebar ends -->