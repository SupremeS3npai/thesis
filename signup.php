<?php
  
  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "customer";

  $conn =  mysqli_connect($host, $dbusername, $dbpassword, $dbname);

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pnumber = $_POST['pnumber'];
        $zipcode = $_POST['zipcode'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        

		$query = mysqli_query($conn,"SELECT email From register Where email = '$email'");
		if(mysqli_num_rows($query)>0){
			echo"email already exist";
		}else{
				$query = "INSERT INTO register (firstname,lastname,phonenumber,zipcode,address,gender,email,username,password)
				VALUES('$fname','$lname','$pnumber','$zipcode','$address','$gender','$email','$username','$password')";
		
				$result = mysqli_query($conn,$query);
				
				echo '<script type="text/javascript">
			   alert("Account Creation Successful!");
			   window.location = "login.php";
				</script>';
			}

        	if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_errno());
        
            // $iNSERT = "INSERT INTO register(firstname,lastname,phonenumber,zipcode,address,
            // email,username,password)values(?,?,?,?,?,?,?,?,?)";

            // $stmt = $conn->prepare($SELECT);
            // $stmt ->bind_param("s",$email);
            // $stmt ->execute();
            // $stmt ->store_result();
            // $rnum = $stmt->num_rows;

            // if($rnum==0){
            //     $stmt->close();

            //     $stmt = $conn->prepare($iNSERT);
            //     $stmt->bind_param("ssiissssi",$fname,$lname,$pnumber,$zipcode,$address,$email,$username,$password);
            //     $stmt->execute();
            //     echo "omegaez clap";
           
                // echo"someone already registred using this email";
            // }
            // $stmt->close();
            // $conn->close();
			
        }

    }
?>

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

	<section class="h-100 bg-dark">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
		<div class="container py-5 h-100">
		  <div class="row d-flex justify-content-center align-items-center h-100 " id="row">
			<div class="col">
			  <div class="card card-registration my-4">
				<div class="row g-0">
				  <div class="col-xl-6 d-none d-xl-block">
					<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
					  alt="Sample photo" class="img-fluid"
					  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
				  </div>
				  <div class="col-xl-6">
					<div class="card-body p-md-5 text-black">
					  <h3 class="mb-5 capitalize">Sign up</h3>
	  
					  <div class="row">
						<div class="col-md-6 mb-4">
						  <div class="form-outline">
							<input type="text" id="form3Example1m" class="form-control form-control-lg" placeholder="First name" name="fname" required />
						
						  </div>
						</div>
						<div class="col-md-6 mb-4">
						  <div class="form-outline">
							<input type="text" id="form3Example1n" class="form-control form-control-lg" placeholder="Last name" name="lname" equired />
							
						  </div>
						</div>
					  </div>
	  
					  <div class="row">
						<div class="col-md-6 mb-4">
						  <div class="form-outline">
							<input type="tel" id="form3Example1m1" class="form-control form-control-lg" placeholder="Phone number (+63)" name="pnumber" required />
							
						  </div>
						</div>
						<div class="col-md-6 mb-4">
						  <div class="form-outline">
							<input type="zip" id="form3Example1n1" class="form-control form-control-lg" placeholder="zip code"name=" zipcode"required />
							
						  </div>
						</div>
					  </div>
	  
					  <div class="form-outline mb-4">
						<input type="text" id="form3Example8" class="form-control form-control-lg" placeholder="Address" name="address" required  />
						
					  </div>
	  
					  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
	  
						<h6 class="mb-0 me-4" >Gender: </h6>
	  
						<div class="form-check form-check-inline mb-0 me-4">
						  <input class="form-check-input" type="radio"  id="femaleGender"
							value="female" name="gender" required >
						  <label class="form-check-label" for="femaleGender" >Female</label >
							
						</div>
	  
						<div class="form-check form-check-inline mb-0 me-4">
						  <input class="form-check-input" type="radio"  id="maleGender"
							value="male" name="gender" required  />
						  <label class="form-check-label" for="maleGender">Male</label >
						</div>
						<div class="form-check form-check-inline mb-0 me-4">
						  <input class="form-check-input" type="radio" id="otherGender"
							value="other" name="gender" required  />
						  <label class="form-check-label" for="otherGender">Other</label >
						</div>
	  
					  </div>
	  
	  
					  <div class="form-outline mb-4">
						<input type="text" id="form3Example97" class="form-control form-control-lg" placeholder="Email"  name="email" required/>
				
					  </div>
					  <div class="row">
						
						  <div class="form-outline mb-4">
							<input type="text" id="form3Example1m" class="form-control form-control-lg" placeholder="Username" name="username" required/>
						
						  </div>
					  <div class="row">
						  <div class="form-outline mb-4">
							<input type="text" id="form3Example1m" class="form-control form-control-lg" placeholder="Password" name="password" required/>
						  </div>
						<div class="d-flex justify-content-end pt-3">
						<input type="submit" class="btn btn-warning btn-lg ms-2" target="_self" value="submit">
						
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
