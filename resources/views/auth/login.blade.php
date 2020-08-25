@extends('web.layouts.app')

@section('title','Login')

@section('body')

<!-- banner -->
<section class="inner-banner">
	<div class="container">
	</div>
</section>
<!-- //banner -->


<!-- signin -->
<section class="signin py-4">
	<div class="container">
		<div class="row main-content-agile">
			<div class="col-lg-5 col-md-9 mx-auto">	
				<div class="sub-main-w3 text-center">	
					<h3>LOGIN</h3>
				    <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
						<div class="icon1">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="form-text text-danger">
                                        <small>{{ $errors->first('email') }}</small>
                                    </span>
                                @endif
						</div>
						<div class="icon2">
                            <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="form-text text-danger">
                                        <small>{{ $errors->first('password') }}</small>
                                    </span>
                                @endif
						</div>
						<label class="anim">
                        <input type="checkbox" id="remember" name="remember" class="checkbox" {{ old('remember') ? 'checked' : '' }}>
							<span>Remember Me</span> 
						</label> 
							<div class="clearfix"></div>
						<input type="submit" value="Login" class="btn btn-default">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //signin -->

@endsection