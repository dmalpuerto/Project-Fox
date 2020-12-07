<?php
require_once('connectDB.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <script src="webcam/webcam.js"></script>
		  <script src="webcam/webcam2.js"></script>
    
    <script>src="residentValidate.js"</script>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Project Fox</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo-blue.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                      
                        <li>
                            <a href="index.html">
                                <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="resident.html">
                                <i class="fas fa-user-circle"></i>Resident Information</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-file"></i>Certificate Issuance</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-users"></i>Account</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-gears"></i>Admin config</a>
                        </li>
                       

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            
          

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Resident Information</h2>
                                    
                                    
                                    
                                    <button type="button" class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target=".bd-example-modal-lg">
                                        Add resident
                                    </button>

                                   <!-- <button class="au-btn au-btn-icon au-btn--blue" type="button" data-toggle="modal" data-target="#myModal">
                                        <i class="zmdi zmdi-plus"></i>Add resident</button>  ---->
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                  
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
      
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Resident Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
       <div class="info">
                <form method='POST' action='saveResident.php' class="form" id="form">
                  <div class="col-lg-12">

                      
                       <div class="picture" id="picture"></div>
                        <div id="profileImage">
                          <input type="hidden" name="profileImage">
                        </div>
                      <div class="row">

                       
                          <div class="col-md-3" style='padding:0px;' style='margin-bottom: 20px;' >
                              <a href="#" class="form-control btn btn-primary" onClick="preview_snapshot()">Open Camera</a>
                          </div>

                          <div class="col-md-3" style='padding:0px;'>
                              <a href="#" class="form-control btn btn-success" onClick="save_photo()">Capture</a>
                          </div>
                            
                         
                      </div>
                       <div class = "col-md-6" style='margin-bottom: 20px;'>
                        <input class="form-control" type='file' name='images2'>
                          </div>
                      
                      
                       <div class = "col-md-6" style= 'margin-bottom: 10px;'>
                           
                              <label><b>Basic Information</b></label>
                          </div>
                      
                      <div class = "row">
                    
                          
                         
                          <div class= "col-md-4" style='margin-bottom: 20px;'>
                      <label>Lastname</label>
                      <input class="form-control" type='text' name='LastName' placeholder='Enter Lastname' required=''>
                      </div>
                          
                          <div class= "col-md-4" style='margin-bottom: 20px;'>
                      <label>Firstname</label>
                      <input class="form-control" type='text' name='FirstName' placeholder='Enter Firstname' required=''>
                      </div>
                              
                            <div class= "col-md-2" style='margin-bottom: 20px;'>  
                      <label>M.I.</label>
                      <input class="form-control" type='text' name='MiddleInitial' placeholder='Enter Middle Name' required=''>
                          </div>
                          
                          </div>
                  </div>

                  <div class="col-lg-12" style='margin-bottom: 30px;'>
                      
                      <div class = "row">
                          <div class = "col-md-5" style='margin-bottom: 20px;'>
                      <label>Gender</label>
                      <select class="form-control" type='text' name='Gender'>
					<option> </option>
					   <option>Male</option>
                        <option>Female</option>
                      </select> 
                            </div>
                          <div class = "col-md-5" style='margin-bottom: 20px;'>
                      <label>Civil Status</label>
                      <select class="form-control" type='text' name='CivilStatus'>
                       <option> </option>
					   <option>Single</option>
                        <option>Married</option>
						<option>Separated</option>
						<option>Widowed</option>
                      </select>     
                          </div>
					</div>
                      
                      <div class ="row">
                          
                          <div class ="col-md-5" style='margin-bottom: 20px;'>
                      <label>Birth Date</label>
                        <input class="form-control" id='bd' type='date' name='BirthDate' placeholder='Enter Birthday' required=''>
                          </div>
                              
					   <div class ="col-md-5" style='margin-bottom: 20px;'>
					  <label>Birth Place</label>
                        <input class = "form-control" id="BirthPlace" name="BirthPlace" type = "text" placeholder="Enter Birth Place" required=''>
                      </div>
                     </div>
                          
                     <div class = "row">
                         
                    <div class ="col-md-5" style='margin-bottom: 20px;'>

                         <label>Occupation</label>
                         <input class = "form-control" id="Occupation" name="Occupation" type = "text" placeholder= "Enter Occupation" required=''>
                         </div>    
                    
                    <div class ="col-md-5" style='margin-bottom: 20px;'>

                          <label>Sector</label>
                        <select class= "form-control" type="text" name="Sector" required="">
                        <option> </option>
                        <option>Private</option>
                        <option>Public</option>
                        <option>Government</option>
                        <option>Unemployed</option>
                        <option>Out of School Youth (OSY)</option>
                        <option>Out of School Children (OSC)</option>
                        <option>Senior Citizen (SC)</option>
                        <option>Overseas Filipino Worker (OFW)</option>
                        <option>Solo Parent</option>
                        <option>Indigenous People (IP)</option>
                        <option>Others</option>
                        </select>
                    </div>    
                    
                      </div>
                      
                      
                      <div class= "row">
                      
                       <div class ="col-md-5" style='margin-bottom: 20px;'>
                      <label>Nationality</label>
                        <input class="form-control" type='text' name='Nationality' placeholder='Enter Nationality' required=''>
                       </div>  
                           
                        <div class ="col-md-5" style='margin-bottom: 20px;'>
					  <label>Religion/Belief</label>
					  <input class="form-control" type="text" name="Religion" placeholder="Enter Religion/Belief" required=''>
                       </div>   
                    
                    </div>
                      
                        <div class= "row">
					  
                     <div class ="col-md-5" style='margin-bottom: 20px;'>

                      <label>Spouse's Name</label>
                      <input class = "form-control" type="text" name="SpouseName"
                             placeholder="Enter Spouse's Name" required=''>
                      </div>
                            
                    <div class ="col-md-5" style='margin-bottom: 20px;'>
                        
                    <label>Spouse's Occupation</label>
                     <input class = "form-control" type="text" name="SpouseOccupation" placeholder="Enter Spouse's Occupation" required=''>
                        
                    </div>     
                      </div>
                      
                       <div class = "col-md-6" style= 'margin-bottom: 10px;'>
                           
                              <label><b>Contact Information</b></label>
                          </div>
                     
                      <div class = "row">
                      
                      <div class = "col-md-10" style="margin-bottom: 20px;">
                          <label>City Address</label>
                          <input class="form-control" type="text" name="CityAddress" placeholder="Enter City Address" required=''>
                          
                          </div>
            
                      
                      </div>
                      
                      <div class="row">
                          
                       <div class="col-md-10" style="margin-bottom: 20px">
                              <label>Provincial Address</label>
                          <input class= "form-control" type= "text" name="ProvincialAddress" placeholder="Enter Provincial Address">
                          
                                
                                 
                          </div>
                      
                      </div>
                      
                      <div class ="row">
                      <div class="col-md-5" style="margin-bottom: 20px">
                          <label>Home Number 1</label>
                          <input class = "form-control" type= "tel" name= "HomeNumber1" placeholder="+63 9xxxxxxxxx">
                          
                          </div> 
                          
                          
                        <div class = "col-md-5" style="margin-bottom: 20px">
                          <label>Mobile Number 1</label>
                            <input class = "form-control" type= "tel" name= "MobileNumber1" placeholder="+63 9xxxxxxxxx">
                          </div>
                      </div>
                      
                       <div class ="row">
                      <div class="col-md-5" style="margin-bottom: 20px">
                          <label>Home Number 2</label>
                          <input class = "form-control" type= "tel" name= "HomeNumber2" placeholder="+63 9xxxxxxxxx">
                          
                          </div> 
                          
                          
                        <div class = "col-md-5" style="margin-bottom: 20px">
                          <label>Mobile Number 2</label>
                            <input class = "form-control" type= "tel" name= "MobileNumber2" placeholder="+63 9xxxxxxxxx">
                          </div>
                      </div>
                      
                      <div class="row">
                      <div class = "col-md-8" style="margin-bottom: 20px">
                          <label>Email Address</label>
                          <input class="form-control" type= "email" name="EmailAddress" placeholder="name@domain.com">
                           
                          </div>
                          
                      
                      </div>
                      
                      
                      <div class="row">
                      <div class="col-md-6" style="margin-bottom: 10px">
                          <label><b>Other Information</b></label>
                          
                          
                          </div>
                      </div>
                       <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-submit" id="register" name="register">Save changes</button>
      </div>
                    
                    </div>
                 
                </form>
              </div>   
          
          
          
        
      </div>
    </div>
  </div>
</div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
?> 
<!-- end document-->
