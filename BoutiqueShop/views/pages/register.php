<?php 
session_start();
require_once '../header.php';
require_once '../../system/load.php';
 ?>

<?php 
$user = require_once '../../models/User.php';

if (isset($_POST['registerbtn'])) 
{
  $error = '';
  if ($user->user_exits_username($_POST['email'])==FALSE)
  {
    $error = '<div class="alert alert-danger">Username Available</div>';
    echo $error;
  }
  if ($_POST['password'] != $_POST['repeatpassword']) 
  {
    $error = '<div class="alert alert-danger">Passwords Do Not Match</div>';
    echo $error;
  }
  if ($error) 
  {
    $mydata = array(
      'firstname' => $_POST['firstname'],
      'lastname' => $_POST['lastname'],
      'email' => $_POST['email'],
      'password' => sha1($_POST['password'])
    );
    $user->user_insert($mydata);
    set_flash('thongbao','Đăng ký thành công');
    redirect('index.php?option=login');
    
  }
}

 ?>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form id="myForm" action="" method="POST" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="fname" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="lname" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="repeatpassword" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <button  type="submit" class="btn btn-primary btn-user btn-block" name="registerbtn">
                  Register Account
                </button>
                

                               
                <hr>
                <a href="index.php" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              </form>
              
                          
              
              
                
              
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Forgot Password?
                                 
                </a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

<?php include('views/pages/scripts.php') ?>
