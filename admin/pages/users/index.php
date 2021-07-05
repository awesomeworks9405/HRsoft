<?php
session_start();
include '../../../functions.php';
$username =  $_SESSION['user'][0]['username'];
if(isset($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html>
<head>
  
  <title>HR-Soft | Users</title>
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

        <li class="active">
            <a href="#"><i class="fa fa-users"></i> Users </a>
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

        <li>
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
        Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pages</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->

          <!-- Add Category -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="../../../controller.php" method="POST">
              <div class="box-body">
                <label>Username:</label>
                <input type="text" class="form-control" name="username" placeholder="Insert Username">
                <br>
                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" class="form-control" name="password" placeholder="Insert Password">
                </div>
                <input type="hidden" class="form-control" name="role" value="user">
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="user_login">Submit</button>
              </div>
            </form>
          </div>


        </div>
        <!--/.col (left) -->



        <!-- right column -->
        <div class="col-md-8">

          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">All Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Role</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                        $log = fetchlogin();
                        foreach ($log as $value) {
                  ?>
                <tr>
                  <td><?php echo $value['username'];?></td>
                  <td><?php echo '*********';?></td>
                  <td><?php echo $value['role'];?></td>
                    <td>
                      <center>
                        <!-- <a href="#" type="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a> -->
                        <a href="../../../delprocess.php?login_id=<?php echo $value['id']?>" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                      </center>
                    </td>
                </tr>
                
                <?php }?>
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>

   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2016 <a href="https://oracode.net">oraCode</a>.</strong> All rights
    reserved.
  </footer>
  
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