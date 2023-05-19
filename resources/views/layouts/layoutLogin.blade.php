<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>

	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: "Poppins", sans-serif;
		}

		body {
			background: #D2D8DF;
		}

		.wrapper {
			width : 330px;
			padding: 2rem 1rem;
			margin: 100px auto;
			background-color: #FBFBFB;
			border-radius: 10px;
			text-align: center;
			box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
		}

		h1 {
			font-size: 2rem;
			color: #07001f;
			margin-bottom: 1.2rem;
		}

		form input {
			width: 92%;
			outline: none;
			border: 1px solid #fff;
			padding: 12px 20px;
			margin-bottom: 10px;
			border-radius: 20px;
			background: #E0E0E0;
		}

		button {
			font-size: 1rem;
			margin-top: 1.8rem;
			padding: 10px 0;
			border-radius: 20px;
			outline: none;
			border: none;
			width: 45%;
			color: #fff;
			cursor: pointer;
		}

		button:hover {
			background: rgba(17, 107, 143, 0.877);
		}

		.one {
			background: #4D647F;
		}

		.two {
			background: #A93333;
		}

		input:focus {
			border: 1px solid rgb(192, 192, 192);
		}

		.member {
			font-size: 0.8rem;
			margin-top: 1.4rem;
			color: #636363;
		}

		.member a {
			color: rgb(17, 107, 143);
			text-decoration: none;
		}

		.recover {
			text-align: right;
			font-size: 0.7rem;
			margin: 0.3rem 1.4rem 0 0;
		}

		.recover a {
			text-decoration: none;
			color: #464647;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<h1>Login</h1>
		<form action="#">
			<input type="text" placeholder="Username">
			<input type="password" placeholder="Password">

			<div class="recover">
				<a href="#">Forgot Password?</a>
			</div>
		</form>
		<button class="one">Login</button>
		<button class="two">Sign Up</button>

		<div class="member">
			Not a member? <a href="/auth/register.blade.php">Register Now</a>
		</div>
	</div>
</body>
</html>
