<?php include('../global/header.php') ?>
<!-- Header portion end-->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4"><?php include('../global/left_menu.php');?></aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <?php if(in_array(11,$permissions)) : ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-6">
    <h1><b>General Ledger </b>Manager</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard/dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item active">General Ledger  Add</li>
    </ol>
  </div>
  <div class="col-sm-6 text-right">
    <a href="/general_ledger_manager/general_ledger_list.php" class="btn btn-primary"><i class="fa fa-list"></i> General Ledger List</a>
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
        <h3 class="card-title"> Add New General Ledger Data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="quickForm" action="general_ledger_add_action.php" method="POST" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">ledger Name</label>
          <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" placeholder="Enter Ledger Name">
        </div>
        <div class="form-group">
              <label for="exampleInputPassword1">Ledger Type</label><br>
              <input type="radio"  name="type" value='1'>
              <label for="male">Income Statement</label> 
              <input type="radio"  name="type" value='0'>
              <label for="female">Balance Sheet</label><br>
        </div>
        <div class="form-group">
        			<label for="exampleInputPassword1">Status</label><br>
        			<input type="radio"  name="status" value='1'>
        			<label for="male">Publish</label> 
        			<input type="radio"  name="status" value='0'>
        			<label for="female">Unpublish</label><br>
        </div>
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
<?php else : ?>
  <section class="content-header">
    <h1 class="text-warning">Access Denied!</h1>
  </section>
<?php endif; ?>
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
