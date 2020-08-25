<!-- footer -->
<section class="copy-right bg-light py-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-9">
				<p class="">Copyright © 2020 Design by
					<a href="#"> Aribah</a>.
				</p>
			</div>
		</div>
	</div>
</section>
<!-- footer -->

<!-- js -->
<script src="{{asset('web/js/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('web/js/bootstrap.js')}}"></script>
<!-- //js -->
	
<!-- dropdown nav -->
<script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->

<script src="{{asset('web/js/smoothscroll.js')}}"></script><!-- Smooth scrolling -->

@yield('js')