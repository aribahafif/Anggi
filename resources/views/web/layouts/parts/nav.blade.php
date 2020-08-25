<!-- navigation -->
<header class="bg-white py-1">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
			<h1>
				<a class="navbar-brand" href="index.html"><img src="{{asset('web/images/logo.png')}}" width="45px" height="45px" alt="Sistem Pakar Diagnosa Penyakit THT"/> SPTHT</a>
			</h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-lg-4 mr-auto">
				  <li class="nav-item">
					<a class="nav-link" href="{{route('home')}}">Home</a>
				  </li>
                  <li class="nav-item">
					<a class="nav-link" href="{{route('diagnosa')}}">Diagnosa</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="{{route('blog')}}">Blog</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="{{route('faq')}}">FAQ's</a>
				  </li>
				</ul>
				<div class="header-right">
					<a href="{{url('/admin')}}" class="signin mr-4"> Login <i class="fas fa-sign-in-alt"></i></a>
				</div>
			</div>
		</nav>

	<!-- 	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Counselor</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="counselor.html" class="nav-link">Counselor</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav> -->
	</div>
</header>
<!-- //navigation -->