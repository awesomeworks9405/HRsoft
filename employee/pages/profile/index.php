<?php
session_start();
include '../../../functions.php';
$role = $_SESSION['user'][0]['role'];
if($role !== 'user'){
  header('location: ../../../login.php');
} 
  $id = $_SESSION['user'][0]['login_id'];
  $check = getEmployee_login($id);
 $val = staffy2($check[0]['employee_appr_id']);

 if(isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html>
<head>
  
  <title>SDI | My Profile</title>
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

        <li class="active">
          <a href="#"><i class="fa fa-user"></i> My Profile</a>
        </li>

        <li>
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
     My Profile & Appraisal Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>My Profile</li>
        <li class="active">Appraisal Details</li>
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
                  <b>Manager's Name:</b> <a class="pull-right"><?php echo $val[0]['manager_name'];?></a>
                </li>
                <li class="list-group-item">
                  <b>Manager's ID:</b> <a class="pull-right"><?php echo $val[0]['manager_idn'];?></a>
                </li>
                <li class="list-group-item">
                  <b>Current Level:</b> <a class="pull-right"><?php echo $val[0]['current_level'];?></a>
                </li>
              </ul>

              <a href="../../index.php" class="btn btn-primary btn-block"><b>Return</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="#" data-toggle="tab">Response Table</a></li>
            </ul>
            <div class="tab-content">
              
            <div class="row">
              <div class="col-xs-12">
                <!-- <div class="box"> -->
                  
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Question</th>
                        <th>Response</th>
                        <th>Category</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                            foreach($val as $key => $v) {

                                // die(var_dump($v));
                              $question_id = $v['question_id'];
                              $response_id = $v['response_id'];
                            
                              $res = staffResponse($response_id);
                              
                              $qst = staffQuestion($question_id);
                            ?>
                      <tr>
                        
                        <td><?php echo $qst[0]['name']; ?></td>
                        <td><?php echo $res[0]['response']; ?></td>
                        <td><?php echo $qst[0]['category_name']; ?></td>
                        
                      </tr>

                      <?php
                            }
                      ?>
                      </tbody>
                    </table>
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