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
    <h1>Party Manager</h1>
  </div>
  <div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/dashboard/dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">party Details</li>
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
      <h3 class="card-title">party<b>Details</b></h3>
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
            $view_query = "SELECT * FROM snit_party_list WHERE id = $id";
            $result = $db->query($view_query);
            $row = mysqli_fetch_array($result);
          ?>
            <tr><td>Party Name</td><td><?php echo $row['party_name']; ?></td></tr> 
            <tr><td>Party Email</td><td><?php echo $row['party_email']; ?></td></tr>
            <tr><td>Party Contact Person</td><td><?php echo $row['party_contact_person']; ?></td></tr>
            <tr><td>Party Contact Number</td><td><?php echo $row['party_contact_number']; ?></td></tr>
            <tr><td>Party Code</td><td><?php echo $row['party_code']; ?></td></tr>
            <tr><td>Address</td><td><?php echo $row['address']; ?></td></tr>
            <tr><td>Trade Licence Number</td><td><?php echo $row['trade_licence_no']; ?></td></tr>
            <tr><td>Vat Number</td><td><?php echo $row['vat_no']; ?></td></tr>
            <tr><td>Tin Number</td><td><?php echo $row['tin_no']; ?></td></tr>
            <tr><td>Party Bank Name</td><td><?php echo $row['party_bank_name']; ?></td></tr>
            <tr><td>Party Bank Account Number</td><td><?php echo $row['party_bank_ac_no']; ?></td></tr>
            <tr><td>Party Cheque Routing Number</td><td><?php echo $row['party_cheque_routing_no']; ?></td></tr>
            <tr><td>Party Type</td><td><?php echo $row['party_type']; ?></td></tr>
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
