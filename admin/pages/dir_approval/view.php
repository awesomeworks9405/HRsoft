<?php
session_start();
include '../../../functions.php';
include '../inc/session2.php';
$username =  $_SESSION['user'][0]['username'];
  $id = $_GET['id'];
 $val = viewApprovalPro($id);
//  die(var_dump($val));
 if(isset($_SESSION['user'])) {
?>



<!DOCTYPE html>
<html>
<head>

  <title>HR-Soft | Director Approval</title>
  <?php include '../inc/head2.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include '../inc/header2.php' ?>
  <!-- Left side column. contains the logo and sidebar -->
 
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>HR | <?php echo $username ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="../../index.php">
            <i class="fa fa-dashboard"></i>Dashboard 
          </a>
        </li>

        <li>
            <a href="../users/index.php"><i class="fa fa-users"></i> Users </a>
        </li>

        <li>
            <a href="../appraisal/index.php"><i class="fa fa-user"></i> Employee Appraisal </a>
        </li>

        <li>
          <a href="#"><i class="fa fa-check"></i> Approval & Recommendation</a>
        </li>

        <li>
          <a href="../promotions/index.php"><i class="fa fa-circle-o-notch"></i> Promotions</a>
        </li>

        <li class="active">
          <a href="../dir_approval/index.php"><i class="fa fa-gavel"></i> Director Approval</a>
        </li>

        <li>
          <a href="../categories/index.php"><i class="fa fa-book"></i> Category</a>
        </li>

        <li>
          <a href="../questions/index.php"><i class="fa fa-question-circle"></i> Questions</a>
        </li>
        
        <li>
          <a href="../students/index.php"><i class="fa fa-user"></i> Students</a>
        </li>  
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Director Approval</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="#" data-toggle="tab"><h4>Director's Approval</h4></a></li>
            </ul>
            <div class="tab-content">
              
            <div class="row">
              <div class="col-xs-12">
                <!-- <div class="box"> -->
                  
                  <!-- /.box-header -->
                  <div class="box-body">
                        
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <li class="list-group-item">
                                            <b>Employee Name:</b> <a class="pull-right"><?php echo $val[0]['fname'];?></a>
                                        </li> 
                                    </div>
                                    <div class="col-xs-6">
                                        <li class="list-group-item">
                                            <b>Employee ID:</b> <a class="pull-right"><?php echo $val[0]['employee_idn'];?></a>
                                        </li>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <li class="list-group-item">
                                            <b>Designation:</b> <a class="pull-right"><?php echo $val[0]['designation'];?></a>
                                        </li> 
                                    </div>
                                    <div class="col-xs-6">
                                        <li class="list-group-item">
                                            <b>Promotion Status by Me:</b> <a class="pull-right"><?php echo $val[0]['promotion_status'];?></a>
                                        </li>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <li class="list-group-item">
                                            <b>Previous Level:</b> <a class="pull-right"><?php echo $val[0]['current_level'];?></a>
                                        </li> 
                                    </div>
                                    <div class="col-xs-6">
                                        <li class="list-group-item">
                                            <b>New Level:</b> <a class="pull-right"><?php echo $val[0]['new_level'];?></a>
                                        </li>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <li class="list-group-item">
                                            <b>Promotion Approval Status by Director:</b> <a class="pull-right"><?php echo $val[0]['approval_status'];?></a>
                                        </li> 
                                    </div>
                                    <div class="col-xs-6">
                                        <li class="list-group-item">
                                            <b>Description by Director:</b> <a class="pull-right"><?php echo $val[0]['description'];?></a>
                                        </li>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <li class="list-group-item">
                                            <b>Date of Director's Decision:</b> <a class="pull-right"><?php echo $val[0]['date_added'];?></a>
                                        </li> 
                                    </div>
                                    <div class="col-xs-6">
                                        
                                    </div>
                                </div>
                                <br>
                                
                                <a href="index.php" class="btn btn-primary btn-block"><b>Return</b></a>
                                
                            </div>

                          <br>
                         
                       
                        
                        <!-- /.box-body -->

                  </div>
                  <!-- /.box-body -->
                <!-- </div> -->
                <!-- /.box -->
              </div>
        <!-- /.col -->
        
      </div>
            
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://oracode.net">oraCode</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include '../inc/scripts2.php' ?>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
<?php }else{ ?>
<?php header('location: ../../../login.php');?>
<?php }?>