<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Backend Project - Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="login-page">
	  <div class="form">
	    <form class="login-form">
	      <input type="text" placeholder="username"/>
	      <input type="password" placeholder="password"/>
	      <button>login</button>
	      <p class="message">Not registered? <a href="{{route('register')}}">Create an account</a></p>
	    </form>
	  </div>

	 <script type="text/javascript" src="script.js"></script>
</div>
</body>
</html>