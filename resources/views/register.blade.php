<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Backend Project - Register Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"> <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
	<div class="login-page">
	  <div class="form">
	    <form class="register-form" action="{{route('register')}}" method="post">
			@csrf
	      <input id="username" name="username" type="text" placeholder="username" value="{{ old('username')}}"/>
	      <input id="password" name="password" type="password" placeholder="password"/>
	      <input id="password_confirmation" name="password_confirmation" type="password" placeholder="confirm password" value="{{old('email')}}"/>
		  <input id="email" name="email" type="text" placeholder="email address" value="{{ old('email') }}"/>	      <button>create</button>
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
		  @error('email')
		  <div class="text-red-500 mt-2 text-sm">
			  {{ $message }}
		  </div>
		  @enderror
		  <p class="message">Already registered? <a href="{{route('login')}}">Sign In</a></p>
	    </form>
	  </div>

	 <script type="text/javascript" src="script.js"></script>
</div>
</body>
</html>