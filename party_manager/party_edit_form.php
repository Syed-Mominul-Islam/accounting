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
    <h1>Party Manager</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/dashboard/dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Party Manager</li>
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
              <h3 class="card-title">Please Edit <small>Party Data</small></h3>
            </div>
            <!-- /.card-header -->
            <?php            
            $id = $_REQUEST['id'];
            $edit_query = "SELECT * FROM snit_party_list WHERE id = $id";
            $result = $db->query($edit_query);
            $row = mysqli_fetch_array($result);
            ?>
            <!-- form start -->
      <form id="quickForm" action="party_edit_action.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Party Name</label>
          <input type="text" name="party_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Party Name" value="<?php echo $row['party_name']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Party Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email Address" value="<?php echo $row['party_email']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Party Contact Person</label>
          <input type="text" name="party_contact_person" class="form-control" id="exampleInputEmail1" placeholder="Party Contact Person" value="<?php echo $row['party_contact_person']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Party Contact Name</label>
          <input type="text" name="party_contact_number" class="form-control" id="exampleInputEmail1" placeholder="Party Contact Number" value="<?php echo $row['party_contact_number']; ?>">
        </div>       
        <div class="form-group">
          <label for="exampleInputPassword1">Party Code</label>
          <input type="password" name="party_code" class="form-control" id="exampleInputPassword1" placeholder="Party Code" value="<?php echo $row['party_code']; ?>"> 
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Address</label>
          <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address" value="<?php echo $row['address']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Trade Licence Number</label>
          <input type="text" name="trade_licence_no" class="form-control" id="exampleInputPassword1" placeholder="Enter Trade Licence Number" value="<?php echo $row['trade_licence_no']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Vat Number</label>
          <input type="text" name="vat_no" class="form-control" id="exampleInputPassword1" placeholder="Vat No" value="<?php echo $row['vat_no']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Tin Number</label>
          <input type="text" name="tin_no" class="form-control" id="exampleInputPassword1" placeholder="Enter Tin Number" value="<?php echo $row['tin_no']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Party Bank Name</label>
          <input type="text" name="party_bank_name" class="form-control" id="exampleInputPassword1" placeholder="Enter Bnak Name" value="<?php echo $row['party_bank_name']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Party Bank Account Number</label>
          <input type="text" name="party_bank_ac_no" class="form-control" id="exampleInputPassword1" placeholder="Enter Bank Account Number" value="<?php echo $row['party_bank_ac_no']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Party Cheque Routing Number</label>
          <input type="text" name="party_cheque_routing_no" class="form-control" id="exampleInputPassword1" placeholder="Party Cheque Routing" value="<?php echo $row['party_cheque_routing_no']; ?>">
        </div>
        <div class="form-group">
              <label for="exampleInputPassword1">Party Type</label><br>
              <input type="radio"  name="party_type"  <?php if($row['party_type'] == 1){ ?>  checked="checked"  <?php } ?> value='1'>
              <label for="male">Buyer</label> 
              <input type="radio"  name="party_type"  <?php if($row['party_type'] == 0){ ?>  checked="checked"  <?php } ?> value='0'>
              <label for="female">Suplier</label><br>
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
