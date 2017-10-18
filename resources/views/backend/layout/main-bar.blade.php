<!-- Mainbar starts -->
			<div class="mainbar">
			
				<!-- Mainbar head starts -->
				<div class="main-head">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-4 col-xs-6">
								<!-- Page title -->
								<h2><i class="fa fa-desktop lblue"></i> Dashboard</h2>
							</div>
							
							<div class="col-md-3 col-sm-4 col-xs-6">
								<!-- Search block -->
								<div class="head-search">
									
								</div>
							</div>
							
							<div class="col-md-3 col-sm-4 hidden-xs">
								<!-- Notifications -->
								
								<div class="clearfix"></div>
							</div>
							
							
							<div class="col-md-3 hidden-sm hidden-xs">
								<!-- Head user -->
								<div class="head-user dropdown pull-right">
									<a href="#" data-toggle="dropdown" id="profile">
										<!-- Icon 
										<i class="fa fa-user"></i>  -->
										
										<img src="{{url('uploads/users')}}/<?php echo Auth::user()->profile_pic ;?>" alt="" class="img-responsive img-circle"/>
										
										<!-- User name -->
										<?php echo strtoupper(Auth::user()->name);?>
										<span class="label label-danger"></span> 
										<i class="fa fa-caret-down"></i> 
									</a>
									<!-- Dropdown -->
									<ul class="dropdown-menu" aria-labelledby="profile">
									    <li><a href="#">View/Edit Profile <span class="badge badge-info pull-right">6</span></a></li>
										<li><a href="#">Change Settings</a></li>
										<li><a href="#">Messages <span class="badge badge-danger pull-right">5</span></a></li>
										 <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>	
					</div>
					
				</div>
				<!-- Mainbar head ends -->