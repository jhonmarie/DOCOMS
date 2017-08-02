<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<form action="{{ asset('confirmation') }}" method="post">
		<input type="text" name="name" placeholder="Name"><br>
		<input type="text" name="username" placeholder="Username"><br>
		<input type="password" name="password" placeholder="********"><br>
		<input type="submit" name="register" value="Sign Up">
	</form>
</body>
</html>