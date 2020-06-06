<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   @include('layouts.home.layouts.css')
  </head>
  <body>
    
	  @include('layouts.home.layouts.header')
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url({{asset('home/images/banner4.png')}});" data-stellar-background-ratio="0.5">
      <div class="overlay" style="background: linear-gradient(45deg, #33921bc9 0%, #42eeff30 100%)"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate">
          	<h2 class="subheading">Hello! Welcome to</h2>
          	<h1 class="mb-4 mb-md-0">Golf News</h1>
          	<div class="row">
          		<div class="col-md-7">
          			<div class="text">
	          			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	          			<div class="mouse">
										<a href="#" class="mouse-icon">
											<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
										</a>
									</div>
								</div>
          		</div>
          	</div>
          </div>
        </div>
      </div>
    </div>

   @yield('content')

    @include('layouts.home.layouts.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  @include('layouts.home.layouts.js')
    
  </body>
</html>