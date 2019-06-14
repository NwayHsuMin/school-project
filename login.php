<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/x-icon" href="/new/ucsm.jpg">
</head>
<body>
<div>
    <h1>Welcome to Online Examination Result Checker</h1>
</div>
<div class="login-form">
    <form>
		<div class="avatar">
			<img src="/new/ucsm.jpg" alt="Avatar">
		</div>
        <h2 class="text-center">Login</h2>   
        <div class="form-group">
            <h3>Username:</h3>
        	<input type="text" class="form-control" name="username" required="required" size="30">
        </div>
		<div class="form-group">
            <h3>Password:</h3>
            <input type="password" class="form-control" name="password" required="required" size="30">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" >Sign in</button>
        </div>
 	<div class="clearfix">
            <a href="#">Forgot Password?</a>
        </div>
    </form>
</div>
</body>
</html>