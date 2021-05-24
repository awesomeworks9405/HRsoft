<?php
session_start();
include 'dbconn.php';
include 'functions.php';

$date_added = date("Y-m-d H:i:s");
$date_updated = date("Y-m-d H:i:s");


if(isset($_POST['sdi'])){
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $occ = $_POST['occupation'];
    $heq = $_POST['heq'];
    $course = $_POST['course'];
    $date = date('Y/m/d');

    $form = InsertForm($fname,$age,$gender,$email,$phone,$address,$occ,$heq,$course,$date);
    if($form == true){
        header('location: success.html');
    }
    else{
        header('location: failed.html');
    }
}


else if(isset($_POST['login'])){
  $_SESSION['token-expire'] = time() + 3600;
  if(!empty($_SESSION['token'])){
      if ($_SESSION['token'] == $_POST['token']) {
          if (time() >= $_SESSION['token-expire']) {
            $_SESSION['login_warn'] = 3;
            header('location: login.php');
          }
          else {
              $uname = strip_tags(trim(ucfirst($_POST['username'])));
              $raw_password = strip_tags(trim(ucfirst($_POST['password'])));
              $argument = !empty($uname) && !empty($raw_password);
              // decrypting password and matching password
              $hash = hash('sha256', $raw_password);
              $salt = md5("sdi2020");
              $password = $salt.$hash;
              if($argument == true){
                  // fetching login data from login table
                  $login = CheckLoginDetails($uname,$password);
                  if($login == true){
                      echo $role = $login[0]['role'];
                     if($role == 'hr'){
                      //  echo 'sadsad';
                        $_SESSION['user'] = $login;
                        header('location: admin/index.php');
                     }
                     else if($role == 'user'){
                        $_SESSION['user'] = $login;
                        header('location: staff_appr.php');
                     }
                     elseif($role == 'director'){
                      $_SESSION['user'] = $login;
                      header('location: in-dir/index.php');
                      }
                  }
                  else{
                    $_SESSION['login_warn'] = 2;
                    header('location: login.php');
                  }
              }
              else{
                  $_SESSION['login_warn'] = 2;
                  header('location: login');
              }
          }
      }
  }
}

elseif (isset($_POST['employee_appraisal'])) {
  # code...
  $login_id = $_SESSION['user'][0]['login_id'];
  $fname = $_POST['fname'];
  $designation = $_POST['designation'];
  $employee_idn = $_POST['employee_idn']; 
  $team = $_POST['team'];
  $current_level = $_POST['current_level'];
  $manager_name = $_POST['manager_name'];
  $manager_idn = $_POST['manager_idn'];
  $date = $_POST['date'];
  $dlr = $_POST['dlr'];

  $employee_appraisal = Insertstaff_appr($login_id,$fname,$designation,$employee_idn,$team,$current_level,$manager_name,$manager_idn,$date,$dlr,$date_added,$date_updated);

  // die(var_dump($employee_appraisal));

  $employee_appr_id = $employee_appraisal;
  $responses = $_POST['response'];
  $question_id = $_POST['question_id'];
  foreach($responses as $question_id => $response) {
  InsertResponse($question_id,$employee_appr_id,$response,$date_added);

    // die(var_dump($test));
  }

  if($employee_appraisal == true){
    header('location: success2.html');
  }
  else{
      header('location: failed.html');
  }
}

elseif (isset($_POST['user_login'])) {
  # code...

  $username = $_POST['username'];
  $raw_password = ucfirst($_POST['password']);
  $role = $_POST['role'];
  
  $hash = hash('sha256', $raw_password);
  $salt = md5("sdi2020");
  $password = $salt.$hash;

  $user_login = insertLoginDetails($username,$password,$role);
  // die(var_dump($user_login));
  
  header('location: admin/pages/users/index.php');
}



//  ADMIN SECTION

if(isset($_POST['submit_question'])){

  $name = $_POST['name'];
  $category_id = $_POST['category_id'];


  $question = InsertQuestion($name,$category_id,$date_added);

  // die(var_dump($question));

  header('location: admin/pages/questions/index.php');
}

if(isset($_POST['submit_category'])){
  $category_name = $_POST['category_name'];
  $description = $_POST['description'];


  $category = InsertCategory($category_name,$description,$date_added);

  header('location: admin/pages/categories/index.php');
}

if(isset($_POST['submit_dir_approval'])){
  $promotion_id = $_POST['promotion_id'];
  $employee_appr_id = $_POST['employee_appr_id'];
  $approval_status = $_POST['approval_status'];
  $description = $_POST['description'];

  $dir_approval = InsertDirApproval($promotion_id,$employee_appr_id,$approval_status,$description,$date_added);
//change to /view
  header('location: in-dir/pages/my_approval/view.php');
}

if(isset($_POST['submit_promotion'])){
  $employee_appr_id = $_POST['employee_appr_id'];
  $promotion_status = $_POST['promotion_status'];
  $new_level = $_POST['new_level'];
  $description = $_POST['description'];



  $submitPro = InsertStaffPromotion($employee_appr_id,$promotion_status,$new_level,$description,$date_added);

  header('location: admin/pages/approval/index.php?id='.$employee_appr_id);
}


?>