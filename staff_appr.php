<?php
session_start();
include 'functions.php';
if(isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>HRsoft | Employee Appraisal</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="assets/css/index.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    

    <style>
        #staff {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #staff td, #staff th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #staff tr:nth-child(even){background-color: #f2f2f2;}
        
        #staff tr:hover {background-color: #ddd;}
        
        #staff th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #037e03e3;
          color: white;
        }
    </style>

</head>

<body>
    <!-- top menu bar/background container -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">HR<span>soft</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item active"><a href="staff_appr.php" class="nav-link">Employee Appraisal</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- small devices menu-bar with bootstrap dropdown -->
   
    <br>
    <section class="mt-100 payment-box" id="form">
        <!-- header design box... -->
        <div class="header-box d-block justify-content-center w-100">
            <h6 class="sub-topic w-100">HRsoft</h6>
            <div class="d-flex w-100 justify-content-center mt-3">
                <div>
                    <h6 class="header-topic">EMPLOYEE APPRAISAL</h6>
                </div>
            </div>
        </div>
        <div class="company-sub-box">
            <!-- sub header box design under the company div -->
            <!-- <div class="sub-topic-header-box">
                <div class="d-block">
                    <h6 class="company-sub-topic">Process to fill the form</h6>
                </div>
            </div> -->
            <style>
                .custom-input{
                    border: 0px;
                    box-shadow: inset 2px 2px 8px 2px rgba(160, 196, 171, 0.308);
                    font-family: arial;
                    color: #949494 !important;
                    transition: all .3s ease
                }
                .custom-input:focus,.custom-input:hover{
                    border: 0px;
                    box-shadow: inset 0px;
                    box-shadow: 2px 2px 8px 2px rgba(160, 196, 171, 0.308);
                }
                .custom-label{
                    font-family: arial;
                    font-size: 14px;
                    color: #8a8a8a;
                }
            </style>
            <form action="controller.php" method="POST">
                <h5><b>Employee Details</b></h5>
                <hr>
                <div class="company-sub-txt row">
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <label class="custom-label">Full Name *</label>
                        <input type="text" name="fname" required class="form-control custom-input">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <label class="custom-label">Designation *</label>
                        <input type="text" name="designation" required class="form-control custom-input">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <label class="custom-label">Employee ID *</label>
                        <input type="text" name="employee_idn" required class="form-control custom-input">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <label class="custom-label">Team *</label>
                        <input type="text" name="team" required class="form-control custom-input">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">

                        <label>Current Level: *</label><br>
                        <select name="current_level" class="form-control custom-input">
                            <option>Select Current Level</option>
                            <option value="Undergraduate Intern">Undergraduate Intern</option>
                            <option value="Graduate Intern">Graduate Intern</option>
                            <option value="Community Developer Trainee">Community Developer Trainee</option>
                            <option value="Executive Community Developer">Executive Community Developer</option>
                            <option value="Assistant Community Developer">Assistant Community Developer</option>
                            <option value="Community Developer">Community Developer</option>
                            <option value="Senior Community Developer">Senior Community Developer</option>
                            <option value="Assistant Manager Community Developer">Assistant Manager Community Developer</option>
                            <option value="Manager Community Developer">Manager Community Developer</option>
                            <option value="Deputy Manager Community Developer">Deputy Manager Community Developer</option>
                            <option value="General Manager Community Developer">General Manager Community Developer</option>
                            <option value="Director">Director</option>
                        </select>    
                    </div>
                </div>
                <br>
                <h6><b>Details About The Review</b></h6>
                <hr>
                <div class="company-sub-txt row">
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <label class="custom-label">HR Manager's Name *</label>
                        <input type="text" name="manager_name" required class="form-control custom-input">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <label class="custom-label">HR Manager's ID *</label>
                        <input type="text" name="manager_idn" required class="form-control custom-input">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <label class="custom-label">Date *</label>
                        <input type="date" name="date" required class="form-control custom-input">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <label class="custom-label">Date Last Reviewed *</label>
                        <input type="date" name="dlr" required class="form-control custom-input">
                    </div> 
                </div>

                <br>
                <p><b>Your ratings and the meaning for those corresponding values are as follows:</b></p>
                <div class="company-sub-txt row" style="background-color: #037e03e3; color: white;">
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        1 - Strongly Agree <br>
                        2 - Agree <br>
                        3 - Sometimes Agree<br>
                        4 - Disagree<br>
                        5 - Strongly Disagree<br><br>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <centre></centre>
                            NA - Not Applicable (when you don’t have
                            first hand knowledge about the person
                            regarding the question)
                        </centre>    
                    </div> <br>
                </div>
                <br>
                <p>
                    <b>
                        Mark the number that corresponds to the description of the employee reviewed from your
                        perspective, for every item
                    </b>
                </p>

                <div class="company-sub-txt row">
                    <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                        <table id="staff">
                            <tr>
                              <th></th>
                              <th>1</th>
                              <th>2</th>
                              <th>3</th>
                              <th>4</th>
                              <th>5</th>
                              <th>NA</th>
                            </tr>
                            
                            <?php 
                                $qst = getQstcat1();
                                
                                foreach ($qst as $value) {
                                             ?>
                            <tr>
                                <th>
                                <?php echo $value['name'];?>
                                <input type="hidden" name="question_id[]" value="<?php echo $value['question_id'] ?>,">
                                </th>
                                <td>
                                    <input type="radio" name="response[<?php echo $value['question_id'] ?>]" value="Strongly Agree">
                                </td>
                                <td>
                                    <input type="radio" name="response[<?php echo $value['question_id'] ?>]" value="Agree">
                                </td>
                                <td>
                                    <input type="radio" name="response[<?php echo $value['question_id'] ?>]" value="Sometimes Agree">
                                </td>
                                <td>
                                    <input type="radio" name="response[<?php echo $value['question_id'] ?>]" value="Disagree">
                                </td>
                                <td>
                                    <input type="radio" name="response[<?php echo $value['question_id'] ?>]" value="Strongly Disagree">
                                </td>
                                <td>
                                    <input type="radio" name="response[<?php echo $value['question_id'] ?>]" value="Not Applicable">
                                </td>  
                            </tr>
                            <?php }?>
                            
                          </table>
                    </div>
                </div>

                <br>
                <h6><b>Performance Parameter</b></h6>
                <hr>

            

                <label><b>First Half - 2021:</b></label>
                <div class="company-sub-txt row">

                    <?php 
                        $qst = getQstcat6();
                        foreach ($qst as $value) {
                    ?>
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <input type="hidden" name="question_id[]" value="<?php echo $value['question_id'] ?>,">
                        <label class="custom-label"><?php echo $value['name'];?> *</label>
                        <textarea name="response[<?php echo $value['question_id'] ?>]" required class="form-control custom-input"></textarea>
                    </div>
                    <?php }?>

                   
                </div>
                
                <br>

                <label><b>Second Half - 2021:</b></label>
                <div class="company-sub-txt row">

                    <?php 
                        $qst = getQstcat7();
                        foreach ($qst as $value) {
                    ?>
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <input type="hidden" name="question_id[]" value="<?php echo $value['question_id'] ?>,">
                        <label class="custom-label"><?php echo $value['name'];?> *</label>
                        <textarea name="response[<?php echo $value['question_id'] ?>]" required class="form-control custom-input"></textarea>
                    </div>
                    <?php }?>

                   
                </div>
                <br>
                <div id="display" class="company-sub-txt row" ></div>
                <br>
                <h6><b>Self Assessment:</b> Evaluate your own performance in terms of results achieved, teamwork and professional growth</h6>
                <hr>
                <label><b>Performance Competencies</b></label>
                <div class="company-sub-txt row">

                    <?php 
                        $qst = getQstcat2();
                        foreach ($qst as $value) {
                    ?>
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <input type="hidden" name="question_id[]" value="<?php echo $value['question_id'] ?>,">
                        <label class="custom-label"><?php echo $value['name'];?> *</label>
                        <textarea name="response[<?php echo $value['question_id'] ?>]" required class="form-control custom-input"></textarea>
                    </div>
                    <?php }?>

                </div>
                <br>
                <label><b>TeamWork</b></label>
                <div class="company-sub-txt row">
                    <?php 
                        $qst = getQstcat3();
                        foreach ($qst as $value) {
                    ?>
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <input type="hidden" name="question_id[]" value="<?php echo $value['question_id'] ?>,">
                        <label class="custom-label"><?php echo $value['name'];?> *</label>
                        <textarea name="response[<?php echo $value['question_id'] ?>]" required class="form-control custom-input"></textarea>
                    </div>
                    <?php }?>

                </div>

                <br>
                <label><b>Progress made in professional development</b></label>
                <div class="company-sub-txt row">
                    <?php 
                        $qst = getQstcat4();
                        foreach ($qst as $value) {
                    ?>
                    <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                        <input type="hidden" name="question_id[]" value="<?php echo $value['question_id'] ?>,">
                        <label class="custom-label"><?php echo $value['name'];?> *</label>
                        <textarea name="response[<?php echo $value['question_id'] ?>]" required class="form-control custom-input"></textarea>
                    </div>
                    <?php } ?>

                </div>
               
            


                <div class="justify-content-center d-flex col-lg-12">
                    <button type="submit" class="btn-success btn mt-5" name="employee_appraisal">Submit</button>
                </div>
            </form>
        </div>
    </section>

    

    <!-- footer section -->
    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">HRsoft</h2>
              <p>HRsoft is a Human Resource Management and Employee Appraisal Software</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="staff_appr.php" class="py-2 d-block">Employee Appraisal</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">#3 Beach Road Adjacent FCMB, Jos Plateau</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+234 706 095 4402</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">samuel.uche@oracode.net</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>

          <!-- <div class="col-md">
            
          </div> -->
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="#" target="_blank">SamTech</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer section -->

    <!-- scroll to top -->
    <div class="scrollTop img-property" id="scrollTop"><i class="scrolltop-hvr fa fa-angle-double-up"></i></div>
</body>

<!-- script imports -->
<script src="app.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/respond.min.js"></script>

</html>
<?php }else{ ?>
<?php header('location: login.php');?>
<?php }?>