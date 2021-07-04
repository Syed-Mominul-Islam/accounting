<!-- Header Portion start -->
<?php include('../global/header.php') ?>
<!-- Header portion end-->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <?php include('../global/left_menu.php');?>
</aside>
    <!-- /.sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<?php if(in_array(43,$permissions)) : ?>
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
    <h1>Setting</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/dashboard/dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active"> Setting</li>
</ol>
</div>
</div>
</div><!-- /.container-fluid -->
</section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Setting</h3>
            </div>
            <!-- /.card-header -->
            <?php   
            if(isset($_POST['submit'])){
            $number_of_items_per_page = $_POST['number_of_items_per_page'];
            $update = "UPDATE snit_settings SET number_of_items_per_page = '$number_of_items_per_page' "; 
            $result = $db->query($update);
            }         
            
            $select_query = "SELECT * FROM snit_settings";
            $result = $db->query($select_query);
            $row = mysqli_fetch_array($result);
            ?>
            <!-- form start -->
            <form id="quickForm" action="" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Number of Iteams Per Page</label>
                  <input type="text" name="number_of_items_per_page" class="form-control" id="exampleInputEmail1" placeholder="Number Of Iteam Page" value="<?php if(!empty($row['number_of_items_per_page'])) { echo $row['number_of_items_per_page']; } ?>">
                </div> 
                                        
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
<?php else : ?>
  <section class="content-header">
    <h1 class="text-warning">Access Denied!</h1>
  </section>
<?php endif; ?>
</div>
<!-- /.content-wrapper -->
 <!-- footer Portion start -->
<?php include('../global/footer.php') ?>
<!-- footer portion end-->
          
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->

</body>
</html>
