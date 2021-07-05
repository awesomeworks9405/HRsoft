<?php

include 'dbconn.php';

function InsertForm($fname,$age,$gender,$email,$phone,$address,$occ,$heq,$course,$date) {
    try {
      global $conn;
      $stmt = $conn->prepare("INSERT INTO forms(fname,age,gender,email,phone,address,occupation,heq,training,date) 
      VALUES (:fname,:age,:gender,:email,:phone,:address,:occupation,:heq,:training,:date)");
      $stmt->bindParam(':fname',$fname);
      $stmt->bindParam(':age', $age);
      $stmt->bindParam(':gender', $gender);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':phone', $phone);
      $stmt->bindParam(':address', $address);
      $stmt->bindParam(':occupation', $occ);
      $stmt->bindParam(':heq', $heq);
      $stmt->bindParam(':training', $course);
      $stmt->bindParam(':date', $date);
      $stmt->execute();
      $last_id = $conn->lastInsertId();
      return $last_id;
    }
    catch(PDOException $e){
      echo "<br>" . $e->getMessage();
    }
}

function insertLoginDetails($username,$password,$role) {
  try {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO login(username,password,role) 
    VALUES (:username,:password,:role)");
    $stmt->bindParam(':username',$username);
    $stmt->bindParam(':password',$password);
    $stmt->bindParam(':role',$role);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }
  catch(PDOException $e){
    echo "<br>" . $e->getMessage();
  }
}

function FetchRegistered() {
  try {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM forms");
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $rows;
  }
  catch(PDOException $e){
  echo "<br>" . $e->getMessage();
  }
}

function Insertstaff_appr($login_id,$fname,$designation,$employee_idn,$state,$lga,$current_level,$dob,$date_added,$date_updated) {
  try {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO employee_appr(login_id,fname,designation,employee_idn,state,lga,current_level,dob,date_added,date_updated) 
    VALUES (:login_id,:fname,:designation,:employee_idn,:state,:lga,:current_level,:dob,:date_added,:date_updated)");
    $stmt->bindParam(':login_id',$login_id);
    $stmt->bindParam(':fname',$fname);
    $stmt->bindParam(':designation', $designation);
    $stmt->bindParam(':employee_idn', $employee_idn);
    $stmt->bindParam(':state', $state);
    $stmt->bindParam(':lga', $lga);
    $stmt->bindParam(':current_level', $current_level);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':date_added', $date_added);
    $stmt->bindParam(':date_updated', $date_updated);
    $stmt->execute();
    $last_id = $conn->lastInsertId();
    return $last_id;
  }
  catch(PDOException $e){
      echo "<br>" . $e->getMessage();
    
  }
}

function InsertResponse($question_id,$employee_appr_id,$response,$date_added) {
  try {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO responses(question_id,employee_appr_id,response,date_added) 
    VALUES (:question_id,:employee_appr_id,:response,:date_added)");
    $stmt->bindParam(':question_id',$question_id);
    $stmt->bindParam(':employee_appr_id', $employee_appr_id);
    $stmt->bindParam(':response', $response);
    $stmt->bindParam(':date_added', $date_added);
    $stmt->execute();
    $last_id = $conn->lastInsertId();
    return $last_id;
  }
  catch(PDOException $e){
      echo "<br>" . $e->getMessage();
    
  }
}

function InsertStaffPromotion($employee_appr_id,$promotion_status,$new_level,$description,$date_added) {
  try {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO promotions(employee_appr_id,promotion_status,new_level,description,date_added) 
    VALUES (:employee_appr_id,:promotion_status,:new_level,:description,:date_added)");
    $stmt->bindParam(':employee_appr_id',$employee_appr_id);
    $stmt->bindParam(':promotion_status', $promotion_status);
    $stmt->bindParam(':new_level', $new_level);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':date_added', $date_added);
    $stmt->execute();
    $last_id = $conn->lastInsertId();
    return $last_id;
  }
  catch(PDOException $e){
      echo "<br>" . $e->getMessage();
    
  }
}


function getStaffSurvey1() {
  global $conn;
  $query = "SELECT * FROM staff_survey1";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

function InsertQuestion($name,$category_id,$date_added) {
  try {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO questions(name,category_id,date_added) 
    VALUES (:name,:category_id,:date_added)");
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->bindParam(':date_added', $date_added);
    $stmt->execute();
    $last_id = $conn->lastInsertId();
    return $last_id;
  }
  catch(PDOException $e){
    echo "<br>" . $e->getMessage();
  }
}

function InsertDirApproval($promotion_id,$employee_appr_id,$approval_status,$description,$date_added) {
  try {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO dir_approval(promotion_id,employee_appr_id,approval_status,description,date_added) 
    VALUES (:promotion_id,:employee_appr_id,:approval_status,:description,:date_added)");
    $stmt->bindParam(':promotion_id',$promotion_id);
    $stmt->bindParam(':employee_appr_id',$employee_appr_id);
    $stmt->bindParam(':approval_status', $approval_status);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':date_added', $date_added);
    $stmt->execute();
    $last_id = $conn->lastInsertId();
    return $last_id;
  }
  catch(PDOException $e){
    echo "<br>" . $e->getMessage();
  }
}

function joinApprovalPro() {
  global $conn;
  $query = "SELECT 
  dir_approval.dir_approval_id, dir_approval.promotion_id, dir_approval.employee_appr_id, dir_approval.approval_status, dir_approval.description, dir_approval.date_added,
  employee_appr.employee_appr_id, employee_appr.fname, employee_appr.designation, employee_appr.employee_idn, employee_appr.state, employee_appr.lga, employee_appr.current_level,
  employee_appr.dob, promotions.promotion_status, promotions.new_level
  FROM dir_approval
  LEFT OUTER JOIN employee_appr ON dir_approval.employee_appr_id = employee_appr.employee_appr_id
  LEFT OUTER JOIN promotions ON dir_approval.promotion_id = promotions.promotion_id"; 
  $execquery = $conn->query($query);
  $fetch = $execquery->fetchAll();

return $fetch;
}

function viewApprovalPro($id) {
  global $conn;
  $query = "SELECT 
  dir_approval.dir_approval_id, dir_approval.promotion_id, dir_approval.employee_appr_id, dir_approval.approval_status, dir_approval.description, dir_approval.date_added,
  employee_appr.employee_appr_id, employee_appr.fname, employee_appr.designation, employee_appr.employee_idn,employee_appr.state, employee_appr.lga, employee_appr.current_level,
  employee_appr.dob, promotions.promotion_status, promotions.new_level
  FROM dir_approval
  LEFT OUTER JOIN employee_appr ON dir_approval.employee_appr_id = employee_appr.employee_appr_id
  LEFT OUTER JOIN promotions ON dir_approval.promotion_id = promotions.promotion_id WHERE dir_approval_id= $id"; 
  $execquery = $conn->query($query);
  $fetch = $execquery->fetchAll();

return $fetch;
}

function OneApprovalPro($id) {
  global $conn;
  $query = "SELECT 
  dir_approval.dir_approval_id, dir_approval.promotion_id, dir_approval.employee_appr_id, dir_approval.approval_status, dir_approval.description, dir_approval.date_added,
  employee_appr.employee_appr_id, employee_appr.fname, employee_appr.designation, employee_appr.employee_idn, employee_appr.state, employee_appr.lga, employee_appr.current_level,
  employee_appr.dob, promotions.promotion_status, promotions.new_level
  FROM dir_approval
  LEFT OUTER JOIN employee_appr ON dir_approval.employee_appr_id = employee_appr.employee_appr_id
  LEFT OUTER JOIN promotions ON dir_approval.promotion_id = promotions.promotion_id WHERE dir_approval.employee_appr_id= $id"; 
  $execquery = $conn->query($query);
  $fetch = $execquery->fetchAll();

return $fetch;
}

function CheckApprovalPro($id) {
  global $conn;
  $query = "SELECT 
  dir_approval.dir_approval_id, dir_approval.promotion_id, dir_approval.employee_appr_id, dir_approval.approval_status, dir_approval.description, dir_approval.date_added,
  employee_appr.employee_appr_id, employee_appr.fname, employee_appr.designation, employee_appr.employee_idn, employee_appr.state, employee_appr.lga, employee_appr.current_level,
  employee_appr.dob, promotions.promotion_status, promotions.new_level
  FROM dir_approval
  LEFT OUTER JOIN employee_appr ON dir_approval.employee_appr_id = employee_appr.employee_appr_id
  LEFT OUTER JOIN promotions ON dir_approval.promotion_id = promotions.promotion_id WHERE dir_approval.promotion_id= $id"; 
  $execquery = $conn->query($query);
  $fetch = $execquery->fetchAll();

return $fetch;
}

// fetching director's approval
function getApproval() {
  global $conn;
  $query = "SELECT * FROM dir_approval";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

// fetching all questions
function getQuestions() {
  global $conn;
  $query = "SELECT * FROM questions";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

function InsertCategory($category_name,$description,$date_added) {
  try {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO categories(category_name,description,date_added) 
    VALUES (:category_name,:description,:date_added)");
    $stmt->bindParam(':category_name',$category_name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':date_added', $date_added);
    $stmt->execute();
    $last_id = $conn->lastInsertId();
    return $last_id;
  }
  catch(PDOException $e){
    echo "<br>" . $e->getMessage();
  }
}

// fetching all Categories
function getCategories() {
  global $conn;
  $query = "SELECT * FROM categories";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

// Fetch Questions with Category as 360 Degree
function getQstcat1() {
  global $conn;
  $query = "SELECT * FROM questions WHERE category_id = '1' ";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

// Fetch Questions with Category as Performance Competencies
function getQstcat2() {
  global $conn;
  $query = "SELECT * FROM questions WHERE category_id = '2' ";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

// Fetch Questions with Category as Team Work
function getQstcat3() {
  global $conn;
  $query = "SELECT * FROM questions WHERE category_id = '3' ";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

// Fetch Questions with Category as Progress Made in Professional Development
function getQstcat4() {
  global $conn;
  $query = "SELECT * FROM questions WHERE category_id = '4' ";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

// Fetch Questions with Category as Manager's Assessment
function getQstcat5() {
  global $conn;
  $query = "SELECT * FROM questions WHERE category_id = '5' ";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

// Fetch Questions with Category as First Half 2021
function getQstcat6() {
  global $conn;
  $query = "SELECT * FROM questions WHERE category_id = '6' ";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

// Fetch Questions with Category as Second Half 2021
function getQstcat7() {
  global $conn;
  $query = "SELECT * FROM questions WHERE category_id = '7' ";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

function getQandc() {
  global $conn;
  $query = "SELECT * FROM questions INNER JOIN categories ON questions.category_id = categories.category_id";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

function staffy2($id) {
  global $conn;
  $query = "SELECT 
  responses.response_id, responses.question_id, responses.employee_appr_id, responses.date_added, 
  employee_appr.employee_appr_id, employee_appr.fname, employee_appr.designation, employee_appr.employee_idn, employee_appr.state, employee_appr.lga, employee_appr.current_level,
  employee_appr.dob, questions.name, questions.category_id
  FROM responses
  LEFT OUTER JOIN employee_appr ON responses.employee_appr_id = employee_appr.employee_appr_id
  LEFT OUTER JOIN questions ON responses.question_id = questions.question_id WHERE responses.employee_appr_id = $id"; 
  $execquery = $conn->query($query);
  $fetch = $execquery->fetchAll();

return $fetch;
}

function staffResponse($id) {
  global $conn;
  $query = "SELECT * FROM responses WHERE response_id = $id";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}


function staffQuestion($id) {
  global $conn;
  $query = "SELECT * FROM questions
  INNER JOIN categories ON questions.category_id = categories.category_id
  WHERE question_id = $id";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

function fetchResponse() {
  global $conn;
  $query = "SELECT * FROM employee_appr";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

function fetchStaffsurvey2() {
  global $conn;
  $query = "SELECT * FROM employee_appr";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

//Employee Promotion Function
function getEmployeePromo() {
  global $conn;
  $query = "SELECT * FROM promotions INNER JOIN employee_appr ON promotions.employee_appr_id = employee_appr.employee_appr_id";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

function EmployeePromo($id) {
  global $conn;
  $query = "SELECT * FROM promotions INNER JOIN employee_appr ON promotions.employee_appr_id = employee_appr.employee_appr_id 
  WHERE promotion_id = $id";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

//Employee Promotion Function
function fetchEmployeePromo($id) {
  global $conn;
  $query = "SELECT * FROM promotions WHERE employee_appr_id = $id";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}

function getEmployee_login($login_id) {
  try {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM employee_appr WHERE login_id = $login_id");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }
  catch(PDOException $e){
    echo "<br>" . $e->getMessage();
  }
}

//fetching all login data for user session
function CheckLoginDetails($uname,$password) {
  try {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM login WHERE username = :username AND password = :password");
    $stmt->bindParam(':username',$uname);
    $stmt->bindParam(':password',$password);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }
  catch(PDOException $e){
    echo "<br>" . $e->getMessage();
  }
}

function fetchlogin() {
  global $conn;
  $query = "SELECT * FROM login";
  $exec = $conn->query($query);
  $fetch = $exec->fetchAll();
  return $fetch;
}


?> 