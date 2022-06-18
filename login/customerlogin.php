
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="customerlogin.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="fontpage.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

<style>
	body{
		font-family: 'Raleway', sans-serif;
	}
</style>

</head>
<body>
	
	<section class="vh-100" style="background-color:coral;">
		<div class="container py-5 h-100">
		  <div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col col-xl-10">
			  <div class="card" style="border-radius: 1rem;">
				<div class="row g-0">
				  <div class="col-md-6 col-lg-5 d-none d-md-block">
					<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
					  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
				  </div>
				  <div class="col-md-6 col-lg-7 d-flex align-items-center">
					<div class="card-body p-4 p-lg-5 text-black">
	  
					  <form action="login.php" method="POST" >
	  
						<div class="d-flex align-items-center mb-3 pb-1">
						  <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
						  <span class="h1 fw-bold mb-0">Customer login</span>
						</div>
	  
						<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
	  
						<div class="form-outline mb-4">
						  <input type="username" id="form2Example17" class="form-control form-control-lg" placeholder="Username" name="username" required/>
						 
						</div>
	  
						<div class="form-outline mb-4">
						  <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="Password" name="password" required/>
						  
						</div>
	  
						<div class="pt-1 mb-4">
						  <button class="btn btn-dark btn-lg btn-block" type="submit" target="_self" value="submit">Login</button>
						  <br><br>
						  <a href="" class="justify-content-center">Forgot Password?</a>
						  <br><br>
						  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="signup.php"
							style="color: #393f81;">Register here</a></p>
						</div>
					
	  
					
					  </form>
	  
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
