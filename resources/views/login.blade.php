<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Backend Project - Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
	<div class="login-page">
		<div class="form">
			@if (session('status'))
			<div class="bg-red-500 p-4 rounded=lg mb-6 text-white text-center">
				{{session('status')}}
			</div>
			@endif 
			<form class="login-form" action="{{route('login')}}" method="post">
				@csrf
				<input id="username" name="username" type="text" placeholder="username" value="{{old('username')}}" />
				<input id="password" name="password" type="password" placeholder="password" />
				@error('username')
				<div class="text-red-500 mt-2 text-sm">
					{{ $message }}
				</div>
				@enderror
				@error('password')
				<div class="text-red-500 mt-2 text-sm">
					{{ $message }}
				</div>
				@enderror
				<button>login</button>
				<p class="message">Not registered? <a href="{{route('register')}}">Create an account</a></p>
			</form>
		</div>

		<script type="text/javascript" src="script.js"></script>
	</div>
</body>

</html>