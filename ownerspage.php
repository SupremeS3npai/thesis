<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="ownerspage.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
<body>
  <div class="sidebar" style="background-color:#54626f">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Owner</span>
    </div>

      <ul class="nav-links">

      <li>
          <a href="adminpage.php" method="POST">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name ">Dashboard</span>
          </a>
        </li>

   
      
    </li>
  
        <li>
          <a href="addshop.php" method="POST">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Add Product</span>
          </a>
        </li>

        
       
        
        <li>
          <a href="Mangeacc.php" method="POST">
            <i class='bx bx-box' ></i>
            <span class="links_name">Manage Account</span>
          </a>
        </li>
       
        <li>
          <a href="Messagereport.php" method="POST">
            <i class='bx bx-message-alt' ></i>
            <span class="links_name">Message Report</span>
          </a>
        </li>

        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>

      
      </ul>

      
  </div>
  <section class="home-section">
    <nav>
      
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' style="background-color:#54626f"></i>
      </div>
     
    </nav>
 
    <div class="row">
      <div class="home-section-0 container" >
      <h1 style="margin-top: 100px">Report</h1>
      <div class="container">
      <div class="card">
          <div class="weekly container col" >
            
             <h2 style="padding-left:70px; color: white">Weekly sales</h2>
          <h3 style="padding-left: 140px; color: white">80%</h3>
        </div>

       
        <div class="row">
      <div class="home-section-0 container" >
     
        <div class="card">
          <div class="saleproduct container" >

             <h2 style="padding-left:70px">Most sale product</h2>
          <h3 style="padding-left: 105px">Shimano bike</h3>
        </div>
      </div>
      
      <div class="row">
      <div class="home-section-0 container" >
     
        <div class="card">
          <div class="Mostsalebikeshop container" >

             <h2 style="padding-left:70px">Most sale bikeshop</h2>
          <h3 style="padding-left: 105px">U-bike shop</h3>
        </div>
      </div>
      </div>

      <section>
       

        </div>
        <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute "style="width: 100px">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Today's Money</p>
                <h4 class="mb-0">$53k</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder  "style="width: 100px">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 ">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute  "style="width: 100px"">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                <h4 class="mb-0">2,300</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute  "style="width: 100px"">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">New Clients</p>
                <h4 class="mb-0">3,462</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute  "style="width: 100px"">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Sales</p>
                <h4 class="mb-0">$103,430</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
            </div>
          </div>
        </div>
      </div>
    
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 "> Daily Sales </h6>
              <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated 4 min ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Completed Tasks</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">just updated</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7 ">
                  <h6>Top 10 Most sold product</h6>
                 
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SHOP</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PRODUCT</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NUM. SOLD</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CATEGORY</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">UBIKE</h6>
                          </div>
                        </div>
                    
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Giant 29 </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	124</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	BIKE</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                    </tr>
                    <tr>
                    <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">UBIKE</h6>
                          </div>
                        </div>
                    
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Giant 29 </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	124</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	BIKE</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                    </tr>
                    <tr>
                    <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">UBIKE</h6>
                          </div>
                        </div>
                    
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Giant 29 </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	124</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	BIKE</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                    </tr>
                    <tr>
                    <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">UBIKE</h6>
                          </div>
                        </div>
                    
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Giant 29 </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	124</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	BIKE</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                    </tr>
                    <tr>
                    <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">UBIKE</h6>
                          </div>
                        </div>
                    
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Giant 29 </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	124</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	BIKE</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                    </tr>
                    <tr>
                    <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">UBIKE</h6>
                          </div>
                        </div>
                    
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Giant 29 </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	124</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	BIKE</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                    </tr>
                    <tr>
                    <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">UBIKE</h6>
                          </div>
                        </div>
                    
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Giant 29 </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	124</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm mb-4">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">	BIKE</span>
                            </div>
                          </div>
                        
                        </div>
                      </td>
                    </tr>
                    <tr>
    
  
      </section>
      </section>

    </div>
    </section>



 

  


    

    

   



</body>
</html>

