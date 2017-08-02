<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="{{ asset('user_data') }}" method="post">
		<input type="text" name="username" placeholder="Username"><br><br>
		<input type="password" name="password" placeholder="********"><br><br>
		<input type="submit" name="login" value="Login">
	</form>
</body>
</html>
