<?php include('../global/header.php') ?>
<!-- Header portion end-->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4"><?php include('../global/left_menu.php');?></aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-6">
    <h1><b>Permission </b>Management</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard/dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item active">Permission  Add</li>
    </ol>
  </div>
  <div class="col-sm-6 text-right">
    <a href="/permission_manager/permission_list.php" class="btn btn-primary"><i class="fa fa-list"></i> Permission List</a>
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
        <h3 class="card-title"> Add New Permission</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="quickForm" action="add_action.php" method="POST">
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Permission Name</label>
          <input type="text" name="permissionname" class="form-control" id="exampleInputEmail1" placeholder="Enter Permission Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Permission Slug</label>
          <input type="text" name="permissionslug" class="form-control" id="exampleInputEmail1" placeholder="Enter Permission Slug">
        </div>
        <div class="form-group">
              <label for="exampleInputPassword1">Status</label><br>
              <input type="radio"  name="status" value='1'>
              <label for="male">Publish</label> 
              <input type="radio"  name="status" value='0'>
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

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
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