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
    <h1><b>User </b>Management</h1>
  </div>
  <div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/dashboard/dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">User List</li>
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
      <h3 class="card-title">User <b>List</b></h3>
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
        <thead>
          <tr>
            <th style="width: 5%">ID</th>
            <th style="width: 15%">First Name</th>
            <th style="width: 15%">Last Name</th>
            <th style="width: 20%">User Name</th>
            <th style="width: 20%">Email</th>
            <th style="width: 25%">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php

            // Pagination Code
            if (isset($_GET['pageno'])) {
              $pageno = $_GET['pageno'];
            } else {
              $pageno = 1;
            }

            $range = 4;

            $no_of_records_per_page = 5;
            $offset = ($pageno - 1) * $no_of_records_per_page;

            $total_pages_sql = "SELECT COUNT(id) AS total_rows FROM snit_user_list WHERE deleted = 0 ";
            $res = $database->conn->query($total_pages_sql);
            $row = mysqli_fetch_array($res);
            $total_rows = $row['total_rows'];
            $total_pages = ceil($total_rows / $no_of_records_per_page);

            $user_query = "SELECT * FROM snit_user_list WHERE deleted = 0 ORDER BY id ASC LIMIT $offset, $no_of_records_per_page";

            $result = $database->conn->query($user_query);

            while($row = mysqli_fetch_array($result)) {
            echo'<tr>
                  <td>'.$row['id'].'</td>
                  <td>'.$row['first_name'].'</td>
                  <td>'.$row['last_name'].'</td>
                  <td>'.$row['username'].'</td>
                  <td>'.$row['email'].'</td>
                  <td class="project-actions text-left">
                    <a class="btn btn-primary btn-sm" href="user_view.php?id='.$row['id'].'"> <i class="fas fa-folder"></i>View </a>                         
                    <a class="btn btn-info btn-sm" href="user_edit_form.php?id='.$row['id'].'">
                      <i class="fas fa-pencil-alt"></i>  Edit                                            
                    </a>
                    <a onclick="return confirm('."'Are you sure?'".')" class="btn btn-danger btn-sm" href="user_delete.php?id='.$row['id'].'">  <i class="fas fa-trash"></i> Delete
                    </a>
                  </td>
                </tr>';
            }
          ?>
        </tbody>
      </table>
      <?php echo $account->pagination($pageno, '/user_manager/user_list.php', $range, $total_pages); ?>
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
