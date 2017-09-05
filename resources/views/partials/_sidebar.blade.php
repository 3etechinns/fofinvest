	    <div class="sidebar" data-background-color="brown" data-active-color="danger">
			<div class="logo">
				<a href="account" class="simple-text logo-mini">
					FOFI
				</a>

				<a href="account" class="simple-text logo-normal">
					FoF Invest
				</a>
			</div>
	    	<div class="sidebar-wrapper">
				<div class="user">
	                <div class="info">
						<div class="photo">
		                    <img src="https://randomuser.me/api/portraits/thumb/men/3.jpg" />
		                </div>

	                    <a data-toggle="collapse" href="#collapseExample" class="">
	                        <span>
								{{ Auth::user()->name }}
		                        <b class="caret"></b>
							</span>
	                    </a>
						<div class="clearfix"></div>

	                    <div class="collapse {{ in_array(Request::path(),['profile','settings'])? 'in':'' }}" id="collapseExample" aria-expanded="true">
	                        <ul class="nav">
	                            <li class="{{ (Request::path()=='profile')? 'active':'' }}">
									<a href="profile">
										<span class="sidebar-mini">Mp</span>
										<span class="sidebar-normal">My Profile</span>
									</a>
								</li>
	                            <li class="{{ (Request::path()=='settings')? 'active':'' }}">
									<a href="/settings">
										<span class="sidebar-mini">S</span>
										<span class="sidebar-normal">Settings</span>
									</a>
								</li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	            <ul class="nav menu">
	                <li class="{{ (Request::path()=='account')? 'active':'' }}">
	                    <a href="/account">
	                        <i class="ti-panel"></i>
	                        <p>Account</p>
	                    </a>
	                </li>
					<li class="{{ in_array(Request::path(),['mypackage','buypackage'])? 'active':'' }}">
						<a data-toggle="collapse" href="#package" aria-expanded="true">
	                        <i class="ti-clipboard"></i>
	                        <p>
								Packages
	                           <b class="caret"></b>
	                        </p>
	                    </a>
	                    <div class="collapse {{ in_array(Request::path(),['mypackage','buypackage'])? 'in':'' }}" id="package">
							<ul class="nav">
								<li class="{{ (Request::path()=='mypackage')? 'active':'' }}">
									<a href="/mypackage">
										<span class="sidebar-mini">MP</span>
										<span class="sidebar-normal">My Package</span>
									</a>
								</li>
								<li class="{{ (Request::path()=='buypackage')? 'active':'' }}">
									<a href="/buypackage">
										<span class="sidebar-mini">BP</span>
										<span class="sidebar-normal">Buy Package</span>
									</a>
								</li>							
	                        </ul>
	                    </div>
	                </li>
					<li class="{{ (Request::path()=='earnings')? 'active':'' }}">
	                    <a href="/earnings">
	                        <i class="ti-bar-chart-alt"></i>
	                        <p>Earnings</p>
	                    </a>
	                </li>	                
					<li class="{{ (Request::path()=='deposits')? 'active':'' }}">
	                    <a href="/deposits">
	                        <i class="ti-bar-chart-alt"></i>
	                        <p>Deposits</p>
	                    </a>
	                </li>
					<li class="{{ (Request::path()=='withdrawals')? 'active':'' }}">
	                    <a href="/withdrawals">
	                        <i class="ti-bar-chart-alt"></i>
	                        <p>Withdrawals</p>
	                    </a>
	                </li>
					<li class="{{ (Request::path()=='users')? 'active':'' }}">
	                    <a href="/users">
	                        <i class="ti-bar-chart-alt"></i>
	                        <p>Users</p>
	                    </a>
	                </li>	
					<li class="{{ (Request::path()=='groups')? 'active':'' }}">
	                    <a href="/groups">
	                        <i class="ti-bar-chart-alt"></i>
	                        <p>Groups</p>
	                    </a>
	                </li>	                                                
	            </ul>
	    	</div>
	    </div>