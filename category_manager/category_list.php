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
    <h1>User <b>Category </b>Management</h1>
  </div>
  <div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/dashboard/dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">User Category List</li>
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
      <h3 class="card-title">User Categoruy <b>List</b></h3>
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
            <th style="width: 30%">ID</th>
            <th style="width: 30%">Category Name</th>
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

            $total_pages_sql = "SELECT COUNT(id) AS total_rows FROM snit_category_list WHERE 1";
            $res = $database->conn->query($total_pages_sql);
            $row = mysqli_fetch_array($res);
            $total_rows = $row['total_rows'];
            $total_pages = ceil($total_rows / $no_of_records_per_page);

          
            $select_query = "SELECT * FROM snit_category_list WHERE 1 ORDER BY id ASC LIMIT $offset, $no_of_records_per_page";
            $result = $database->conn->query($select_query);

            while($row = mysqli_fetch_array($result)) {
            echo'<tr>
                  <td>'.$row['id'].'</td>
                  <td>'.$row['category_name'].'</td>
                  <td class="project-actions text-left">
                    <a class="btn btn-primary btn-sm" href="category_view.php?id='.$row['id'].'"> <i class="fas fa-folder"></i>View </a>                         
                    <a class="btn btn-info btn-sm" href="category_edit_form.php?id='.$row['id'].'">
                      <i class="fas fa-pencil-alt"></i>  Edit                                            
                    </a>
                    <a onclick="return confirm('."'Are you sure?'".')" class="btn btn-danger btn-sm" href="category_delete.php?id='.$row['id'].'">  <i class="fas fa-trash"></i> Delete
                    </a>
                  </td>
                </tr>';
            }
          ?>
        </tbody>
      </table>
       <?php echo $account->pagination($pageno, '/category_manager/category_list.php', $range, $total_pages); ?>
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
