<?php
session_start();
include '../../../functions.php';
include '../inc/session2.php';
$username =  $_SESSION['user'][0]['username']; 
  $id = $_GET['id'];
 $val = staffy2($id);
 if(isset($_SESSION['user'])) {
?>



<!DOCTYPE html>
<html>
<head>
  
  <title>HR-Soft | Employee Appraisal</title>
  <?php include '../inc/head2.php' ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../inc/header2.php' ?>

  <!-- Left side column. contains the logo and sidebar -->
  
  <?php include '../inc/aside2.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Appraisal Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php">Employee Appraisal</a></li>
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
                  <b>State of Origin:</b> <a class="pull-right"><?php echo $val[0]['state'];?></a>
                </li>
                <li class="list-group-item">
                  <b>L.G.A:</b> <a class="pull-right"><?php echo $val[0]['lga'];?></a>
                </li>
                <li class="list-group-item">
                  <b>D.O.B:</b> <a class="pull-right"><?php echo $val[0]['dob'];?></a>
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