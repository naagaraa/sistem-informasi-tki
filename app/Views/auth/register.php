<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url("auth/fontawesome-free/css/all.min.css") ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url("auth/css/sb-admin-2.min.css") ?>" rel="stylesheet">

</head>

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
              <form action="<?= base_url("register/create") ?>" method="POST" class="user">
              <?= csrf_field(); ?>
                <div class="form-group row">
                    <input name="nama_user" type="text" class="form-control form-control-user" id="nama-user" placeholder="nama kamu">
                </div>
                <div class="form-group row">
                  <input name="email-user" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="email kamu">
                </div>
                <div class="form-group row">
                    <input name="password-user" type="password" class="form-control form-control-user" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
                <hr>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?=base_url('/login')?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="<?= base_url("vendor/jquery/jquery.min.js") ?>"></script> -->
  <!-- <script src="<?= base_url("vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script> -->

  <!-- Core plugin JavaScript-->
  <!-- <script src="<?= base_url("vendor/jquery-easing/jquery.easing.min.js") ?>"></script> -->

</body>

</html>
