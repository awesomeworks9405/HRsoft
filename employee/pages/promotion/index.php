<?php
session_start();
include '../../../functions.php';
$role = $_SESSION['user'][0]['role'];
if($role !== 'user'){
  header('location: ../../../login.php');
} 
  $login_id = $_SESSION['user'][0]['login_id'];
  $check = getEmployee_login($login_id);
 $val = staffy2($check[0]['employee_appr_id']);

 if(isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html>
<head>
  
  <title>HR-Soft | Promotion Status</title>
  <?php include '../inc/head.php' ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../inc/header.php' ?>

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
          <p><?php echo $val[0]['fname'] ?></p>
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
          <a href="../profile/index.php"><i class="fa fa-user"></i> My Profile</a>
        </li>

        <li class="active">
          <a href="../promotion/index.php"><i class="fa fa-check-circle"></i> Promotion Status</a>
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
      Promotion Status
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Promotion Status</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <?php
    //HR's Promotion
    $promo = fetchEmployeePromo($check[0]['employee_appr_id']);

    //Director's Promotion
    $dir = OneApprovalPro($check[0]['employee_appr_id']);
    // die(var_dump($dir));
    ?>

    <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?php echo $val[0]['fname'] ?></h3>
              <h5 class="widget-user-desc"><?php echo $val[0]['current_level'];?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../../../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Promotion Status by HR</h5>
                    <span class="description-text"><?php
                    if(!empty($promo)){
                        echo $promo[0]['promotion_status'];
                    }
                    else{
                        echo 'Pending';
                    } 
                     ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">New Level</h5>
                    <span class="description-text"><?php 
                    if(!empty($promo)){
                        echo $promo[0]['new_level'];
                    }
                    else{
                        echo '';
                    } 
                    ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">Date Promoted</h5>
                    <span class="description-text"><?php
                    if(!empty($promo)){
                        echo $promo[0]['date_added'];
                    }
                    else{
                        echo '';
                    } 
                     
                     ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <!-- Another row -->
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Final Approval by Director</h5>
                    <span class="description-text"><?php
                    if(!empty($dir)){
                        echo $dir[0]['approval_status'];
                    }
                    else{
                        echo 'Pending';
                    } 
                     ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Description</h5>
                    <span class="description-text"><?php 
                    if(!empty($dir)){
                        echo $dir[0]['description'];
                    }
                    else{
                        echo '';
                    } 
                    ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">Director's Date</h5>
                    <span class="description-text"><?php
                    if(!empty($dir)){
                        echo $dir[0]['date_added'];
                    }
                    else{
                        echo '';
                    } 
                     
                     ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.Another row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
       
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="https://oracode.net">oraCode.net</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php include '../inc/scripts.php' ?>

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