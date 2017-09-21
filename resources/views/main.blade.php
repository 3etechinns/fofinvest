@include('partials._header')
	<div class="wrapper">
		@include('partials._sidebar')

	    <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="/{{ Request::path() }}">
                            @yield('title')
                        </a>
                    </div>
                    @include('partials._navbar')
                </div>
            </nav>

	        <div class="content">
	        	<div class="container-fluid">
	        		@yield('content')
	        	</div>
	        </div>

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>System Date: {{ date('Y-m-d H:i:s') }}</li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script>, Reserved by FoF Invest</a>
                    </div>
                </div>
            </footer>
	    </div>
	</div>
@include('partials._footer')