<header>
    <nav class="navbar navbar-default">
    	<div class="container">
    		<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
    			<button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard</a>
    		</div><!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('account') }}">Account</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                  </ul>
    		</div><!-- /.navbar-collapse -->
    	</div><!-- /.container -->
    </nav>
</header>
