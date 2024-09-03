<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width,
						initial-scale=1.0">
	<title>Resister</title>
	<link rel="stylesheet" href="style.css">
	
</head>

<body>
	<header>
	</header>

	<!-- container div -->
	
	<div class="container">

		<!-- upper button section to select
			the login or signup form -->
		<div class="slider"></div>
		<div class="btn">
			<button class="signup">Sign up</button>
			<button class="login">Log in</button>
		</div>

		<!-- Form section that contains the
			login and the signup form -->
		<div class="form-section">

		
			<!-- signup form -->
			<div class="signup-box">
				<input type="text"
					class="name ele"
					placeholder="Enter your name">
				<input type="email"
					class="email ele"
					placeholder="youremail@email.com">
				<input type="password"
					class="password ele"
					placeholder="password">
				<input type="password"
					class="password ele"
					placeholder="Confirm password">
				<button class="clkbtn">Sign up</button>
				
			</div>
				<div>
					<a href="project.php">
						<button class="btn btn-success btn-sm">HOME</button>	
					</a>
			</div>
			
			<!-- login form -->
			
			
				
				<div class="login-box">
					<input type="email"
						class="email ele"
						placeholder="youremail@email.com">
					<input type="password"
						class="password ele"
						placeholder="password">
					<button class="clkbtn">   Log in </button>
					<a href="project.php">
						<button class="btn btn-success btn-sm" >HOME</button>	
					</a>
				</div>
	
		
		</div>
	</div>
	<script src="assets/js/index.js"></script>


</body>
</html>