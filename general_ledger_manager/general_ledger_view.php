<!-- Header Portion start -->
<?php include('../global/header.php') ?>
<!-- Header portion end-->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <?php include('../global/left_menu.php'); ?>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <?php if(in_array(11,$permissions)) : ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-6">
    <h1><b>General Ledger </b>Management</h1>
  </div>
  <div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/dashboard/dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">General Ledger Details</li>
  </ol>
  </div>
  </div>
  </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

  <!-- Default box -->
  <div class="card">
  <div class="card-header">
      <h3 class="card-title">General Ledger <b>Details</b></h3>
  <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
      <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
      <i class="fas fa-times"></i>
    </button>
  </div>
  </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
        
        <tbody>
          <?php 
            $id = $_REQUEST['id'];
            $view_query = "SELECT * FROM snit_general_ledger_list WHERE id = $id";
            $result = $db->query($view_query);
            $row = mysqli_fetch_array($result);
          ?>
            <tr><td>Ledger Name</td><td><?php echo $row['ledger_name']; ?></td></tr>
            <tr><td>Ledger Type</td><td><?php echo $row['ledger_type']; ?></td></tr>
            <tr><td>Status</td><td><?php echo $row['status']; ?></td></tr>
            <tr><td>Deleted</td><td><?php echo $row['deleted']; ?></td></tr>
            <tr><td>Created By</td><td><?php echo $row['created_by']; ?></td></tr>
            <tr><td>Created Time</td><td><?php echo $row['created_date']; ?></td></tr>
            <tr><td>Updated By</td><td><?php echo $row['updated_by']; ?></td></tr>
            <tr><td>Updated Time</td><td><?php echo $row['updated_date']; ?></td></tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
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

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
