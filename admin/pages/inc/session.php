<?php
$role = $_SESSION['user'][0]['role'];
if($role !== 'hr'){
  header('location: ../login.php');
}
?>