<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Golf<i>News</i>.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Articles</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Team</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
	          @if(!empty(Auth::user()))
		      <li class="nav-item"><a href="#" class="nav-link">{{Auth::user()->name}}</a></li>
		      <li class="nav-item"><a href="{{route('notification')}}" class="nav-link">Admin</a></li>
	          <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">Logout</a></li>
	          @else
			  <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Register</a></li>
	          <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
	          @endif
	        </ul>
	      </div>
	    </div>
	  </nav>