<?php
$role = $_SESSION['user'][0]['role'];
if($role !== 'director'){
  header('location: ../../../login.php');
}
?>