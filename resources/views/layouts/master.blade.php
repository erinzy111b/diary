<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Future Imperfect by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/layout-master.css') }}" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.css'
    integrity='sha512-+ouAqATs1y4kpPMCHfKHVJwf308zo+tC9dlEYK9rKe7kiP35NiP+Oi35rCFnc16zdvk9aBkDUtEO3tIPl0xN5w=='
    crossorigin='anonymous' />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">{{ __('Treatingtree') }}</a></h1>
						<nav class="links">
							<ul>
								<li><a href="#">{{ __('Daily Note') }}</a></li>
								<li><a href="#">Ipsum</a></li>
								<li><a href="#">Feugiat</a></li>
								<li><a href="#">{{ __('Shop') }}</a></li>
								<li><a href="#">{{ __('Info') }}</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
                  <form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>

								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

            <!-- User -->

              @if (Route::has('login'))
                {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                    @auth
                    <!-- Welcome -->
                    <section class="rabbitA">
                      <!-- close -->
                          <a href="#menu" class="inline-flex col-12 rabbitB">
        {{-- <i class="fa-solid fa-xmark"></i> --}}
                            <p style="margin-bottom: 0;">{{ __('Hi, ') }} {{ Auth::user()->name }} {{ __(' <3') }}
        {{-- <br> {{ __('Welcome back to treatingtree.') }}  --}}
                          <br> {{ __('Wishing you a peaceful day :)') }}</p></a>
                    </section>
<!-- Settings -->
                    {{-- <section>
                        <ul class="actions stacked">
                            <li><a href="{{ url('/dashboard') }}" class="button large fit">{{ __('Setting') }}</a></li>
                        </ul>
                    </section> --}}

                    <section>
                      <ul class="links quick-icons">
                       <li class="col-12">
                          <div class="col-3"><a href="#" class="fa-regular fa-address-card rabbitC" style=""></a> <!--<i class="fa-solid fa-user-pen"></i>--></div>
                          <div class="col-3"><a href="#" class="fa-solid fa-gear rabbitC"></a></div>
                          <div class="col-3"></div>
                          <div class="col-3"></div>


                        </li>
                      </ul>
                    </section>
                    <!-- Links -->
							      <section>
								      <ul class="links">
									      <li>
										      <a href="#">
											    <h3>Lorem ipsum</h3>
											    <p>Feugiat tempus veroeros dolor</p>
										      </a>
									      </li>
									      <li>
										      <a href="#">
											    <h3>Dolor sit amet</h3>
											    <p>Sed vitae justo condimentum</p>
										      </a>
									      </li>
									      <li>
										      <a href="#">
											    <h3>Feugiat veroeros</h3>
											    <p>Phasellus sed ultricies mi congue</p>
										      </a>
									      </li>
									      <li>
										      <a href="#">
											    <h3>Etiam sed consequat</h3>
											    <p>Porta lectus amet ultricies</p>
										      </a>
									      </li>
								      </ul>
							      </section>
                    @else
                    <!-- Login -->
                    <section>
                      {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                        <ul class="actions stacked">
									        <li><a href="{{ url('/login') }}" class="button large fit">{{ __('Log in') }}</a></li>
                        </ul>
                      @if (Route::has('register'))
                        <ul class="actions stacked">
									        <li><a href="{{ url('/register') }}" class="button large fit">{{ __('Register') }}</a></li>
                        </ul>
                      @endif
                      {{-- </div> --}}
                    </section>


                    @endauth
                  @endif
                {{-- </section> --}}
                <section>
                  <a href="#menu" class="rabbitD button large fit"><i class="fa-solid fa-xmark" style="font-size: 28px"></i></a>
                </section>
					</section>




{{-- ///////////////////////////////////////// --}}



{{-- /////////////////////////////////// --}}





						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section>



			</div>

		<!-- Scripts -->
			<script src="{{ asset('js/jquery.min.js') }}"></script>
			<script src="{{ asset('js/browser.min.js') }}"></script>
			<script src="{{ asset('js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('js/util.js') }}"></script>
			<script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>
