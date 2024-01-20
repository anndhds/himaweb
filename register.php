

                                      <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo '<div class="alert alert-danger">Pendaftaran Gagal NIM tidak terdaftar atau akun sudah di aktifkan</div>';
    }else if($_GET['pesan'] == "logout"){
      echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "sukses"){
      echo '<div class="alert alert-success">Pendaftaran Berhasil Silahkan Kembali Ke Halaman Login</div>';
    }else if($_GET['pesan'] == "belum_login"){
      echo "Anda harus login untuk mengakses halaman admin";
    }
  }
  ?>
                                  <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>REGISTER | HIMIK PORTAL</title>

        <!-- App css -->
        <link href="user/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="user/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="user/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="user/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="user/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="userassets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="user/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="user/assets/js/modernizr.min.js"></script>

    </head>
    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      margin: 0px;
      padding: 0px;
      background: #1abc9d;
    }

    h1 {
      color: #fff;
      text-align: center;
      font-family: Arial;
      font-weight: normal;
      margin: 2em auto 0px;
    }

    .outer-screen {
      background: #13202c;
      width: 900px;
      height: 540px;
      margin: 50px auto;
      border-radius: 20px;
      -moz-border-radius: 20px;
      -webkit-border-radius: 20px;
      position: relative;
      padding-top: 35px;
    }

    .outer-screen:before {
      content: "";
      background: #3e4a53;
      border-radius: 50px;
      position: absolute;
      bottom: 20px;
      left: 0px;
      right: 0px;
      margin: auto;
      z-index: 9999;
      width: 50px;
      height: 50px;
    }

    .outer-screen:after {
      content: "";
      background: #ecf0f1;
      width: 900px;
      height: 88px;
      position: absolute;
      bottom: 0px;
      border-radius: 0px 0px 20px 20px;
      -moz-border-radius: 0px 0px 20px 20px;
      -webkit-border-radius: 0px 0px 20px 20px;
    }

    .stand {
      position: relative;
    }

    .stand:before {
      content: "";
      position: absolute;
      bottom: -150px;
      border-bottom: 150px solid #bdc3c7;
      border-left: 30px solid transparent;
      border-right: 30px solid transparent;
      width: 200px;
      left: 0px;
      right: 0px;
      margin: auto;
    }

    .stand:after {
      content: "";
      position: absolute;
      width: 260px;
      left: 0px;
      right: 0px;
      margin: auto;
      border-bottom: 30px solid #bdc3c7;
      border-left: 30px solid transparent;
      border-right: 30px solid transparent;
      bottom: -180px;
      box-shadow: 0px 4px 0px #7e7e7e;
    }
    .text-muted a {
        color: black;
    }

    .inner-screen {
      width: 800px;
      height: 340px;
      background: #1abc9d;
      margin: 0px auto;
      padding-top: 80px;
    }

    .form {
      width: 400px;
      height: 230px;
      background: #edeff1;
      margin: 0px auto;
      padding-top: 20px;
      border-radius: 10px;
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
    }

    input[type="text"] {
      display: block;
      width: 309px;
      height: 35px;
      margin: 15px auto;
      background: #fff;
      border: 0px;
      padding: 5px;
      font-size: 16px;
      border: 2px solid #fff;
      transition: all 0.3s ease;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
    }

    input[type="text"]:focus {
      border: 2px solid #1abc9d;
    }

    input[type="submit"] {
      display: block;
      background: #1abc9d;
      width: 314px;
      padding: 12px;
      cursor: pointer;
      color: #fff;
      border: 0px;
      margin: auto;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      font-size: 17px;
      transition: all 0.3s ease;
    }

    input[type="submit"]:hover {
      background: #09cca6;
    }

    a {
      text-align: center;
      font-family: Arial;
      color: gray;
      display: block;
      margin: 15px auto;
      text-decoration: none;
      transition: all 0.3s ease;
      font-size: 12px;
    }

    a:hover {
      color: #1abc9d;
    }

    ::-webkit-input-placeholder {
      color: gray;
    }

    :-moz-placeholder {
      /* Firefox 18- */
      color: gray;
    }

    ::-moz-placeholder {
      /* Firefox 19+ */
      color: gray;
    }

    :-ms-input-placeholder {
      color: gray;
    }
  </style>
</head>

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index.php" class="text-success">
                                            <span><img src="img/core-img/logo.png" alt="" height="36"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="regc.php" method="post">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="nim" placeholder="NIM">
                                            </div>
                                        </div>
<script type="text/javascript">
  var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'PASS';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password Must Be Same';
  }
}

</script>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="password" required="" placeholder="Password" onkeyup='check();'>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="confirm_password" required="" placeholder="Confirm Password" onkeyup='check();'>
                                            </div>
                                        </div>
<span id='message'></span>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                               

                                            </div>
                                        </div>

                                        <div class="form-group text-center m-t-30">

                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit" name="register">Register</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <div class="row m-t-50">
    <div class="col-sm-12 text-center">
        <p class="text-muted" style="color: white;">Already have an account? <a href="login.php" class="text-primary m-l-5"><b>Login</b></a></p>
    </div>
</div>


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="user/assets/js/jquery.min.js"></script>
        <script src="user/assets/js/bootstrap.min.js"></script>
        <script src="user/assets/js/detect.js"></script>
        <script src="user/assets/js/fastclick.js"></script>
        <script src="user/assets/js/jquery.blockUI.js"></script>
        <script src="user/assets/js/waves.js"></script>
        <script src="user/assets/js/jquery.slimscroll.js"></script>
        <script src="user/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="user/assets/js/jquery.core.js"></script>
        <script src="user/assets/js/jquery.app.js"></script>

    </body>
</html>
