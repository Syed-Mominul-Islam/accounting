<!-- Header Portion start -->
<?php include('../global/header.php') ?>
<!-- Header portion end-->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <?php include('../global/left_menu.php'); ?>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <?php if(in_array(15,$permissions)) : ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-6">
    <h1><b>Party </b>Manager</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard/dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item active">Party List</li>
    </ol>
  </div>
  <div class="col-sm-6 text-right">
    <a href="/party_manager/party_add_form.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add Party</a>
  </div>
  </div>
  </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

  <!-- Default box -->
  <div class="card">
  <div class="card-header">
      <h3 class="card-title">Party <b>List</b></h3>
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
            <th style="width: 15%">Name</th>
            <th style="width: 10%">Mail</th>
            <th style="width: 10%">Contact Person</th>
            <th style="width: 10%">Contact Number</th>
            <th style="width: 10%">Code</th>
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

            $range = $account->get_settings_data('pagination_rang');

            $no_of_records_per_page = $account->get_settings_data('number_of_items_per_page');
            $offset = ($pageno - 1) * $no_of_records_per_page;

            $total_pages_sql = "SELECT COUNT(id) AS total_rows FROM snit_party_list WHERE deleted = 0 ";
            $res = $database->conn->query($total_pages_sql);
            $row = mysqli_fetch_array($res);
            $total_rows = $row['total_rows'];
            $total_pages = ceil($total_rows / $no_of_records_per_page);

            $user_query = "SELECT * FROM snit_party_list WHERE deleted = 0 ORDER BY id ASC LIMIT $offset, $no_of_records_per_page";

            $result = $database->conn->query($user_query);

            while($row = mysqli_fetch_array($result)) {
            echo'<tr>
                  <td>'.$row['id'].'</td>
                  <td>'.$row['party_name'].'</td>
                  <td>'.$row['party_email'].'</td>
                  <td>'.$row['party_contact_person'].'</td>
                  <td>'.$row['party_contact_number'].'</td>
                  <td>'.$row['party_code'].'</td>
                  <td class="project-actions text-left">
                    <a class="btn btn-primary btn-sm" href="party_view.php?id='.$row['id'].'"> <i class="fas fa-folder"></i>View </a>                         
                    <a class="btn btn-info btn-sm" href="party_edit_form.php?id='.$row['id'].'">
                      <i class="fas fa-pencil-alt"></i>  Edit                                            
                    </a>
                    <a onclick="return confirm('."'Are you sure?'".')" class="btn btn-danger btn-sm" href="party_delete.php?id='.$row['id'].'">  <i class="fas fa-trash"></i> Delete
                    </a>
                  </td>
                </tr>';
            }
          ?>
        </tbody>
      </table>
       <?php
        if($total_rows > $no_of_records_per_page ) {
          echo $account->pagination($pageno, '/party_manager/party_list.php',  $range, $total_pages);
        }
      ?>
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
