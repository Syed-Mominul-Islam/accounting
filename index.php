<?php  
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Accounting Software - Login</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
 <div class="login-box">

    <?php 
      $message = '';
      include('dbconnect/dbconnect.php');
      $database = new Database();
      $db = $database->getConnection();
          if (isset($_POST['signin'])){

            $username = $_POST['username'];
            $password = $_POST['password'];

            $quary = "SELECT id, first_name, last_name, password FROM snit_user_list WHERE email = '$username' OR username = '$username'";

            $result = $db->query($quary);
            $row = mysqli_fetch_array($result);

            if(!empty($row['password'])) {
              $dbpassword = $row['password'];
            } else {
              $dbpassword = '';
            }

            if(password_verify($_POST['password'], $dbpassword)) {
              $_SESSION['id'] = $row['id'];
              $_SESSION['first_name'] = $row['first_name'];
              $_SESSION['last_name'] = $row['last_name'];
              header('Location: dashboard/dashboard.php');
            } else {

                if( empty($username) || empty($password) ) {
                $message = "<div style='color:red'> PLEASE ENTER USERNAME AND PASSWORD</div>";
            } else {

            $message = "<div style='color:red'> YOUR USERNAME OR PASSWORD IS WRONG </div>";
        }
      }

     } 

    ?>
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
            <div class="card-header text-center">
              <a  class="h1"><b>WEB</b>SNITkkkkkkkkkkkkkkkk</a>
            </div>
        <div class="card-body">
          <p class="login-box-msg"><i>Online</i> <b>Accounting</b> <i>Software</i></p>

          <form id="login-form" action="" method="post">
            <div class="input-group mb-3 form-group">
              <input type="text" class="form-control" name="username" placeholder="Email / User Name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="nav-icon fas fa-user-alt"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3 form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block" name="signin">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

            
          <!-- /.social-auth-links -->
            <?php 
                echo $message;
            ?>
          
            
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
  </div>
        <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-validation/jquery.validate.min.js"></script>
  <script>
    $(function () {
    $('#login-form').validate({
    rules: {
      username: {
      required: true,
      },
      password: {
      required: true,
      minlength: 5
      },
    },
    messages: {
      username: {
      required: "Please enter email or user name",
      },
      password: {
      required: "Please provide a password",
      minlength: "Your password must be at least 5 characters long"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
    });
    });
  </script>
</body>
</html>
