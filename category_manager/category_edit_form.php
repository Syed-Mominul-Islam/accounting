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
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
    <h1>User <b>Category</b> Management</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/dashboard/dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active"> Edit User Category</li>
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
              <h3 class="card-title">Please Edit <small>User Category</small></h3>
            </div>
            <!-- /.card-header -->
            <?php 
            
            $id = $_REQUEST['id'];
            $edit_query = "SELECT * FROM snit_category_list WHERE id = $id";
            $result = $db->query($edit_query);
            $row = mysqli_fetch_array($result);
            ?>
            <!-- form start -->
            <form id="quickForm" action="edit_category_action.php?id=<?php echo $id ?>" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="text" name="categoryname" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name" value="<?php echo $row['category_name']; ?>">
                </div> 
                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label><br>
                  <input type="radio"  name="status" <?php if($row['status'] == 1){ ?>  checked="checked"  <?php } ?> value='1'>
                  <label for="male">Publish</label> 
                  <input type="radio"  name="status" <?php if($row['status'] == 0){ ?>  checked="checked"  <?php } ?> value='0'>
                  <label for="female">Unpublish</label><br>
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
