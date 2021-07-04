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
    <h1>User Management</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/dashboard/dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">User Edit</li>
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
              <h3 class="card-title">Please Edit <small>User Data</small></h3>
            </div>
            <!-- /.card-header -->
            <?php 
           
            $id = $_REQUEST['id'];
            $edit_query = "SELECT * FROM snit_user_list WHERE id = $id";
            $result = $db->query($edit_query);
            $row = mysqli_fetch_array($result);
            ?>
            <!-- form start -->
            <form id="quickForm" action="edit_action.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Fast Name</label>
                  <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" value="<?php echo $row['first_name']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name" value="<?php echo $row['last_name']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">User Name</label>
                  <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter User Name" value="<?php echo $row['username']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="mail" class="form-control" id="exampleInputEmail1" placeholder="Enter email"  value="<?php echo $row['email']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row['password']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Select image to upload:</label>
                    <input type="file" name="fileToUpload" class="form-control" id="fileToUpload" placeholder="Enter Bank Name" value="<?php echo $row['profile_image']; ?>">
                </div> 
                <div class="form-group">    
                  <label for="exampleInputPassword1">User Role</label>
                  <select class="form-control select2" style="width: 100%;" name="user_role_id" id="cars">
                    <?php
                       $user_role_quary = "select id, role_name  from snit_user_role_list where 1";
                       $user_role_result = $db->query($user_role_quary);
                       while ($role = mysqli_fetch_array($user_role_result)) {
                        $selected = ($role['id'] == $row['user_role_id']) ? 'selected' : '' ;
                        echo '<option '.$selected.' value="'.$role['id'].'">'.$role['role_name'].'</option>';
                       }
                    ?>
                  </select>
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
