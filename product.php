


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
	<link rel="stylesheet" type="text/css" href="addbikeshop.css">

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

<section class="h-100 h-custom" style="background-color: coral; mb-5  ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-4 " style="width: 75%">
          
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Add Product</h3>

            <form class="px-md-2">

              <div class="form-outline mb-2">
                <label for="Product name"Product Name></label>
                <input type="text" id="onwername" name="onwers name" class="form-control" placeholder="Product name" required/>
            
              </div>

              <div class="form-outline mb-2">
                <input type="text" id="brand" name="brand" class="form-control" placeholder="brand" required/>
               
              </div>
              <div class="form-outline mb-2">
                <input type="text" id="address" name="address" class="form-control" placeholder="details" required/>
               
              </div>
              <div class="form-outline mb-2">
                <input type="text" id="contactnum" name="contact number" class="form-control" placeholder="price" required />
               
              </div>

              <div class="category">
               <label for="category" style="width: 45%">Select Category</label>
               <select name="category" id="category" value="select category" style="width: 30%"> 
             <OPTIOn>Bike</OPTIOn>
             <OPTIOn>Fork</OPTIOn>
             <OPTIOn>Shifter</OPTIOn>
             <OPTIOn>Tires</OPTIOn>
             <OPTIOn>Pedal</OPTIOn>
             <OPTIOn>Spraket</OPTIOn>
             <OPTIOn>helmet</OPTIOn>

               </select>
              </div>

             


<script>
const minusButton = document.getElementById('minus');
const plusButton = document.getElementById('plus');
const inputField = document.getElementById('input');

minusButton.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField.value) || 0;
  inputField.value = currentValue - 1;
});

plusButton.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField.value) || 0;
  inputField.value = currentValue + 1;
});
</script>

<div form-outline mb-2>

<label for="input" style="width:45%">Quantity</label>
<input type="number" value="0" id="input" style="width: 70px; border-radius: 3px"/><br><br>
<input type="file" id="file" name="filename">

</div>

             
          
              <div class="row">
                <div class="col-md-6 mb-4">

               

                </div>
              
              </div>

            

            

              <button type="submit" class="btn btn-success btn-lg bg-dark my-2">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>



</body>