                    <div class="collapse navbar-collapse in">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="/home" class="dropdown-toggle btn-magnify">
                                    Home
                                </a>
                            </li>                       
                            <li>
                                <a href="/about" class="dropdown-toggle btn-magnify">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="/investment" class="dropdown-toggle btn-magnify">
                                    Investment
                                </a>
                            </li>
                            <li>
                                <a href="/faq" class="dropdown-toggle btn-magnify">
                                    FAQ
                                </a>
                            </li>
                            @if(Auth::check())
                                <li>
                                    <a href="/account" class="dropdown-toggle btn-magnify">
                                        Account
                                    </a>
                                </li>                                               
	                            <li>
	                                <a href="/logout"
	                                    onclick="event.preventDefault();
	                                             document.getElementById('logout-form').submit();">
	                                    Logout
	                                </a>

	                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                    {{ csrf_field() }}
	                                </form>
	                            </li>
                            @else
	                            <li>
	                                <a href="/login" class="dropdown-toggle btn-magnify">
	                                    Login
	                                </a>
	                            </li>  
	                            <li>
	                                <a href="/register" class="dropdown-toggle btn-magnify">
	                                    Register
	                                </a>
	                            </li>	                            
                            @endif                                                                                                 
                        </ul>
                    </div>