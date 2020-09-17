<?php 

	if($_SESSION['login']==true){
		if ($username=='hung') {
			header('Location: index.php?mod=admin&c=category&act=index');
		}else{
					header('Location: index.php?mod=client&c=category&act=index');
				}
		
	}
 ?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
  <title>Login</title>
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8" />
  <meta name="keywords" content="Effect Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
  />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- Meta tag Keywords -->
  <!-- css files -->
  <link rel="stylesheet" href="Public/frontend/login/css/style.css" type="text/css" media="all" />
  <!-- Style-CSS -->
  <link rel="stylesheet" href="Public/frontend/login/css/fontawesome-all.css">
  <!-- Font-Awesome-Icons-CSS -->
  <!-- //css files -->
  <!-- web-fonts -->
  <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <!-- //web-fonts -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>
  <!-- bg effect -->
  <div id="bg">
    <canvas></canvas>
    <canvas></canvas>
    <canvas></canvas>
  </div>
  <!-- //bg effect -->
  <!-- title -->
  <h1>Đăng Nhập</h1>
  <!-- //title -->
  <!-- content -->
  <div class="sub-main-w3">
    <form action="index.php?mod=admin&c=auth&act=checkLogin" method="post">
      <h2>Login Now
        <i class="fas fa-level-down-alt"></i>
      </h2>
      <div class="form-style-agile">
        <label>
          <i class="fas fa-user"></i>
          Username
        </label>
        <input type="text" name="username" size="30" placeholder="Username">
      </div>
      <div class="form-style-agile">
        <label>
          <i class="fas fa-unlock-alt"></i>
          Password
        </label>
        <input type="password" name="password" size="30" placeholder="Password">
      </div>
      <!-- checkbox -->
      <div class="wthree-text">
        <ul>
          <li>
            <label class="anim">
              <input type="checkbox" class="checkbox" required="">
              <span>Bạn đồng ý điểu kiện của blog</span>
            </label>
          </li>
          <li>
            <a href="index.php?mod=admin&c=user&act=add">Sign up</a>
          </li>
        </ul>
      </div>
      <!-- //checkbox -->
      <input type="submit" id="success" value="Log In" name="btn_submit">
    </form>
  </div>
  <!-- //content -->

  <!-- copyright -->
  <div class="footer">
    <p>&copy;Design by
      <a href="http://w3layouts.com">LQH</a>
    </p>
  </div>
  <!-- //copyright -->

  <!-- Jquery -->
  <script src="Public/frontend/login/js/jquery-3.3.1.min.js"></script>
  <!-- //Jquery -->

  <!-- effect js -->
  <script src="Public/frontend/login/js/canva_moving_effect.js"></script>
  <!-- //effect js -->
  

</body>

</html>