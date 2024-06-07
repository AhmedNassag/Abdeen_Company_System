<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>Coding System Company</title>
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
		@if (App::getLocale() == 'ar')
		<link rel="stylesheet" href="{{ asset('assets/style-rtl.css') }}">
		@else
		<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
		@endif
	</head>
	<body>
		<div class="container">
			<div class="screen">
				<div class="screen__content">
					<form class="login" method="POST" action="{{ route('login') }}">
						@csrf
						<div class="login__field">
							<i class="login__icon fas fa-user"></i>
							<input id="identify" type="text" class="login__input" name="identify" placeholder="{{ trans('main.Email Or Mobile') }}" value="{{ old('identify') }}" required>
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="login__field">
							<i class="login__icon fas fa-lock"></i>
							<input id="password" type="password" class="login__input" name="password" autocomplete="current-password" placeholder="{{ trans('main.Password') }}" required>
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<button type="submit" class="button login__submit">
							<span class="button__text">{{ trans('main.Login') }}</span>
							<i class="button__icon fas @if (App::getLocale() == 'ar') fa-chevron-left @else fa-chevron-right @endif"></i>
						</button>											
					</form>
					<div class="social-login">
						<h3>Dashboard Login</h3>
					</div>
				</div>
				<div class="screen__background">
					<span class="screen__background__shape screen__background__shape4"></span>
					<span class="screen__background__shape screen__background__shape3"></span>		
					<span class="screen__background__shape screen__background__shape2"></span>
					<span class="screen__background__shape screen__background__shape1"></span>
				</div>		
			</div>
		</div>
	</body>
</html>