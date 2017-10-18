<!-- Sidebar starts -->
      <div class="sidebar">
      
        <div class="sidey">
      
          <!-- Logo -->
          <div class="logo">
            <h1><a href="index.html"><i class="fa fa-desktop br-red"></i> Customer <span>{{Auth::user()->name}}</span></a></h1>
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
                <li><a href="{{url('dashboard')}}" class="active"><i class="fa fa-desktop"></i> Dashboard</a></li>
        
                <li><a href="{{route('customer.quotes')}}"><i class="fa fa-wrench"></i> Quote Orders</a></li>
                <li><a href="{{route('customer.orders')}}"><i class="fa fa-wrench"></i> Product Orders</a></li>
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