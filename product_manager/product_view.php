<!-- Header Portion start -->
<?php include('../global/header.php') ?>
<!-- Header portion end-->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <?php include('../global/left_menu.php'); ?>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-6">
    <h1>Product Manager</h1>
  </div>
  <div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/dashboard/dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">product Details</li>
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
      <h3 class="card-title">product<b>Details</b></h3>
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
            $view_query = "SELECT * FROM snit_product_list WHERE id = $id";
            $result = $db->query($view_query);
            $row = mysqli_fetch_array($result);
          ?>
            <tr><td>Category Id</td><td><?php echo $row['category_id']; ?></td></tr> 
            <tr><td>Product Name</td><td><?php echo $row['product_name']; ?></td></tr>
            <tr><td>Product Number</td><td><?php echo $row['product_number']; ?></td></tr>
            <tr><td>Description</td><td><?php echo $row['description']; ?></td></tr>
            <tr><td>Party Id</td><td><?php echo $row['party_id']; ?></td></tr>
            <tr><td>Barcode</td><td><?php echo $row['barcode']; ?></td></tr>
            <tr><td>Sale Prize</td><td><?php echo $row['sale_price']; ?></td></tr>
            <tr><td>Print Quantity</td><td><?php echo $row['print_quantity']; ?></td></tr>
            <tr><td>Status</td><td><?php echo $row['status']; ?></td></tr>
            <tr><td>Deleted</td><td><?php echo $row['deleted']; ?></td></tr>
            <tr><td>Created By</td><td><?php echo $row['created_by']; ?></td></tr>
            <tr><td>Created Date</td><td><?php echo $row['created_date']; ?></td></tr>
            <tr><td>Updated By</td><td><?php echo $row['updated_by']; ?></td></tr>
            <tr><td>Updated Date</td><td><?php echo $row['updated_date']; ?></td></tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
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
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
