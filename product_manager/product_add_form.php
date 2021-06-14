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
      <h1><b>Poduct </b>Manager</h1>
  </div>
  <div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
     <li class="breadcrumb-item"><a href="/dashboard/dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item active">Poduct Add</li>
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
        <h3 class="card-title"> Add New Product</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="quickForm" action="add_action.php" method="POST" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group">    
      
            <label for="exampleInputPassword1">Category Name</label>
            <select class="form-control select2" style="width: 100%;" name="categoryid" id="cars">
                      <?php 
                         $user_role_quary = "select id, category_name  from snit_category_list where 1";
                         $update = $db->query($user_role_quary);

                         while ($row = mysqli_fetch_array($update)) {    
                          echo '<option selected="selected" value="'.$row['id'].'">'.$row['category_name'].'</option>';
                         }
                      ?>             
            </select>

        </div> 
        <div class="form-group">
          <label for="exampleInputEmail1">Poduct Name</label>
          <input type="text" name="productname" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Product Number</label>
          <input type="text" name="productnumber" class="form-control" id="exampleInputEmail1" placeholder="Product Number">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Description">
        </div>
        
         <div class="form-group">    
      
            <label for="exampleInputPassword1">Party Name</label>
            <select class="form-control select2" style="width: 100%;" name="party_id" id="cars">
                      <?php 
                         $user_role_quary = "select id, party_name  from snit_party_list where 1";
                         $update = $db->query($user_role_quary);

                         while ($row = mysqli_fetch_array($update)) {    
                          echo '<option selected="selected" value="'.$row['id'].'">'.$row['party_name'].'</option>';
                         }
                      ?>             
            </select>

        </div>         
         <div class="form-group">
          <label for="exampleInputPassword1">BarCode</label>
          <input type="text" name="barcode" class="form-control" id="exampleInputPassword1" placeholder="Enter Barcode">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Sale Prize</label>
          <input type="text" name="saleprize" class="form-control" id="exampleInputPassword1" placeholder="Sale Price">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Print Quantity</label>
          <input type="text" name="printquantity" class="form-control" id="exampleInputPassword1" placeholder="Print Quantity">
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
