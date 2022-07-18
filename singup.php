

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="sign_up.css">

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

	<section class="h-100" style="background-color: #54626f">
		<form method="POST" action="signupconn.php">
		<div class="container py-5 vh-100">
		  <div class="row d-flex justify-content-center align-items-center h-100 " id="row">
			<div class="col col-xl-8 col-md-6">
			  <div class="card card-registration my-4">
				<div class="row g-0">
				 
				  <div class="col-xl-6">
					<div class="card-body p-md-5 text-black">
					  <h3 class="mb-5 capitalize">Sign up</h3>
	  
					  <div class="row">
						<div class="col-md-6 mb-4">
						  <div class="form-outline">
							<input type="text" id="Firstname" class="form-control form-control-lg"  name="First_name" placeholder="First name" required />
						
						  </div>
						</div>
						<div class="col-md-6 mb-4">
						  <div class="form-outline">
							<input type="text" id="lastname" class="form-control form-control-lg" name="Last_name" placeholder="Last name" required/>
							
						  </div>
						</div>
					  </div>
					  <div class="row">
						<div class="col-md-6 mb-4">
						  <div class="form-outline">
							<input type="email" id="username" class="form-control form-control-lg" name="Username" placeholder="Username" required />
						
						  </div>
						</div>
						<div class="col-md-6 mb-4">
						  <div class="form-outline">
							<input type="Password" id="password" class="form-control form-control-lg" name="password" placeholder="Password" required/>
							
						  </div>
						</div>
					  </div>
	  
					  <div class="row">
						<div class="col-md-6 mb-4">
						  <div class="form-outline">
							<input type="tel" id="phone_number" class="form-control form-control-lg" name="Phone_number"placeholder="Phone number (+63)" required/>
							
						  </div>
						</div>
						<div class="col-md-6 mb-4">
						  <div class="form-outline">
							<input type="text" id="address " class="form-control form-control-lg" name="address" placeholder="address"required/>
							
						  </div>
						</div>
					  </div>
	  

	  
	  
					
						<div class="d-flex justify-content-end pt-5">
							<button type="reset" class="btn btn-light btn-lg">Reset all</button>
							<input type="submit" class="btn btn-warning btn-lg ms-2" value="submit">
						
						  </div>
					  </div>
					  
					 
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</form>

	  </section>
</body>
</html>