<?php

include 'dbconn.php';

if (isset($_GET['survey_id'])) {
	global $conn;
    $id = $_GET['survey_id'];
    $stmt = $conn->prepare("DELETE FROM staff_survey1 WHERE staff_survey_id='$id'");
    $stmt->execute();
    header('location:./admin/pages/survey_one.php');
}

if (isset($_GET['response_id'])) {
	global $conn;
    $id = $_GET['response_id'];
    $stmt = $conn->prepare("DELETE FROM responses WHERE response_id='$id'");
    $stmt->execute();
    header('location:./admin/pages/survey_one.php');
}

if (isset($_GET['question_id'])) {
	global $conn;
    $id = $_GET['question_id'];
    $stmt = $conn->prepare("DELETE FROM questions WHERE question_id='$id'");
    $stmt->execute();
    header('location:./admin/pages/questions/index.php');
}

if (isset($_GET['category_id'])) {
	global $conn;
    $id = $_GET['category_id'];
    $stmt = $conn->prepare("DELETE FROM categories WHERE category_id='$id'");
    $stmt->execute();
    header('location:./admin/pages/categories/index.php');
}

if (isset($_GET['promotion_id'])) {
	global $conn;
    $id = $_GET['promotion_id'];
    $stmt = $conn->prepare("DELETE FROM categories WHERE promotion_id='$id'");
    $stmt->execute();
    header('location:./admin/pages/promotions/index.php');
}

if (isset($_GET['dir_approval_id'])) {
	global $conn;
    $id = $_GET['dir_approval_id'];
    $stmt = $conn->prepare("DELETE FROM categories WHERE dir_approval_id='$id'");
    $stmt->execute();
    header('location:./admin/pages/promotions/index.php');
}

?>