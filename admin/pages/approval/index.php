<?php
session_start();
include '../../../functions.php';
include '../inc/session2.php';
  $id = $_GET['id'];
 $val = staffy2($id);
 if(isset($_SESSION['user'])) {
?>



<!DOCTYPE html>
<html>
<head>

  <title>SDI | Employee Appraisal</title>
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
          <p>HR</p>
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

        <li><a href="../appraisal/index.php"><i class="fa fa-user"></i> Employee Appraisal</a></li>

        <li class="active">
          <a href="#"><i class="fa fa-check"></i> Approval & Recommendation</a>
        </li>

        <li>
          <a href="../categories/index.php"><i class="fa fa-book"></i> Categories</a>
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
        <li><a href="#">Approval & Recommendation</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              <h3 class="profile-username text-center"><?php echo $val[0]['fname'];?></h3>

              <p class="text-muted text-center">Designation: <?php echo $val[0]['designation'];?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Employee ID:</b> <a class="pull-right"><?php echo $val[0]['employee_idn'];?></a>
                </li>
                <li class="list-group-item">
                  <b>Team:</b> <a class="pull-right"><?php echo $val[0]['team'];?></a>
                </li>
                <li class="list-group-item">
                  <b>Current Level:</b> <a class="pull-right"><?php echo $val[0]['current_level'];?></a>
                </li>
              </ul>

              <a href="index.php" class="btn btn-primary btn-block"><b>Return</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="#" data-toggle="tab">HR Approval</a></li>
            </ul>
            <div class="tab-content">
              
            <div class="row">
              <div class="col-xs-12">
                <!-- <div class="box"> -->
                  
                  <!-- /.box-header -->
                  <div class="box-body">
                      <form role="form" action="../../../controller.php" method="POST">
                        <div class="box-body">

                        <input type="hidden" class="form-control" name="employee_appr_id" value="<?php echo $id ?>">

                          <div class="form-group">
                            <label>Promotion Status</label>
                            <select id="options" onchange="myOptions();" class="form-control" name="promotion_status">
                              <option>Select Promotion Status</option>
                              <option value="Promoted">Promoted</option>
                              <option value="Not Promoted">Not Promoted</option>
                            </select>
                          </div>

                          <br>

                          <div id="promo_level" class="form-group" style="display: none;">
                            <label>New Promotion Level</label>
                            <select class="form-control" name="new_level">
                            <option value="Null">Select New Level</option>
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
                          <div id="des" class="form-group" style="display: none;">
                              <label>Description</label>
                              <textarea class="form-control" rows="3" name='description' placeholder="Enter Description..."></textarea>
                          </div>
                          <div class="box-footer">
                              <button id="submit" type="submit" class="btn btn-primary" name="submit_promotion" disabled>Submit</button>
                          </div>
                          
                          <div class="form-group">
                          <input type="hidden" class="form-control" name="date_added">
                          </div>
                        </div>
                        <div id="display" class="form-group"></div>
                        <!-- /.box-body -->

                      </form>
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
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
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