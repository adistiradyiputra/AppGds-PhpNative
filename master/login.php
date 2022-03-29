<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>SISTEM INFORMASI GDS</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="assets/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- iCheck -->
  <link href="assets/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

  <link href="assets/images/icons/favicon.ico" rel="icon" type="image/png" />


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-page" style="background-image: url('');">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><small><b>SISTEM INFORMASI GDS</b></small></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
      <form action="modul/cek_login.php" method="post" onSubmit="return validasi()">
        <div class="form-group has-feedback">
          <input type="text" name="username" id="username" class="form-control" placeholder="Username" />
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <a href="#"></a><br>
            <a href="register.html" class="text-center"></a>
          </div><!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
          </div><!-- /.col -->
        </div>
      </form>
    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

  <!-- jQuery 2.1.3 -->
  <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>


  <script type="text/javascript">
    function validasi() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      if (username != "" && password != "") {
        return true;
      } else {
        alert('Username dan Password harus di isi !');
        return false;
      }
    }

    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>

</html>