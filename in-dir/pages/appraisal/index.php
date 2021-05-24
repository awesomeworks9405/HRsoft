<?php
session_start();
include '../../../functions.php';
$login_id = $_SESSION['user'][0]['login_id'];
$username = $_SESSION['user'][0]['username'];
$val = getEmployee_login($login_id);
include '../inc/session2.php';
if(isset($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html>
<head>

  <title>SDI | Staff Appraisal</title>
  <?php include '../inc/head.php' ?>
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include '../inc/header.php' ?>
  <!-- Left side column. contains the logo and sidebar -->
 
  <?php include '../inc/aside.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Employee Appraisal
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Designation</th>
                  <th>Employee ID</th>
                  <th>Team</th>
                  <th>HR Manager's Name</th>
                  <th>HR Manager's ID</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                        $survey2 = fetchStaffsurvey2();
                        // $rank = 1;
                        // die(var_dump($survey1));
                        foreach ($survey2 as $value) {?>
                <tr>
                  <td><?php echo $value['fname'];?></td>
                  <td><?php echo $value['designation'];?></td>
                  <td><?php echo $value['employee_idn'];?></td>
                  <td><?php echo $value['team'];?></td>
                  <td><?php echo $value['manager_name'];?></td>
                  <td><?php echo $value['manager_idn'];?></td>
                  <td>
                    <center>
                      <a href="view.php?id=<?php echo $value['employee_appr_id']?>" type="button" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                    </center>
                  </td>
                </tr>
                
                <?php }?>
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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