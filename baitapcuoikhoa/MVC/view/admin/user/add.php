<!DOCTYPE HTML>
<html lang="zxx">

<head>
  <title>Sign up</title>
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
  <?php 
    $msg1="";
    $msg1_1="";
    $msg2="";
    $msg2_2="";
    $msg3="";
    $msg4="";
    $msgok="";
    $msg6="";
    if (isset($_COOKIE['msg1'])) {
        $msg1=$_COOKIE['msg1'];
    }
    if (isset($_COOKIE['msg1_1'])) {
        $msg1_1=$_COOKIE['msg1_1'];
    }
    if (isset($_COOKIE['msg2'])) {
        $msg2=$_COOKIE['msg2'];
    }
    if (isset($_COOKIE['msg2_2'])) {
        $msg2_2=$_COOKIE['msg2_2'];
    }
    if (isset($_COOKIE['msg3'])) {
        $msg3=$_COOKIE['msg3'];
    }
    if (isset($_COOKIE['msg4'])) {
        $msg4=$_COOKIE['msg4'];
    }
    if (isset($_COOKIE['msg6'])) {
        $msg6=$_COOKIE['msg6'];
    }

   ?>
  <!-- bg effect -->
  <div id="bg">
    <canvas></canvas>
    <canvas></canvas>
    <canvas></canvas>
  </div>
  <!-- //bg effect -->
  <!-- title -->
  <h1>Đăng Ký</h1>
  <!-- //title -->
  <!-- content -->
  <div class="sub-main-w3">
    <form action="index.php?mod=admin&c=user&act=store" method="POST" role="form" enctype="multipart/form-data">
      <h2>Sign up
        <i class="fas fa-level-down-alt"></i>
      </h2>
      
      <div class="form-style-agile">
        <label>
          <i class="fas fa-user"></i>
          Username
        </label>
        <input type="text" name="name" size="30" placeholder="Username">
        <p style="color: red"><?php echo $msg1; ?></p>
      </div>
      <div class="form-style-agile">
        <label>
          <i class="fas fa-user"></i>
          Email
        </label>
        <input type="text" name="email" size="30" placeholder="Email">
        <p style="color: red"><?php echo $msg3; ?></p>
      </div>
      <div class="form-style-agile">
        <label>
          <i class="fas fa-user"></i>
          Avatar
        </label>
        <input type="file" class="form-control" id="" placeholder="" name="file">
      </div>
      <div class="form-style-agile">
        <label>
          <i class="fas fa-unlock-alt"></i>
          Password
        </label>
        <input type="password" name="password" size="30" placeholder="*******">
        <p style="color: red"><?php echo $msg2; ?></p>       
      </div>
      <div class="form-style-agile">
        <label>
          <i class="fas fa-user"></i>
          Created_at
        </label>
        <input type="date" name="created_at" size="30" placeholder="Created_at">
        <p style="color: red"><?php echo $msg4; ?></p>
      </div>
      <!-- checkbox -->
      <div class="wthree-text">
        <ul>
          <li>
            <label class="anim">
              <input type="checkbox" class="checkbox" required="">
              <span>Bạn đồng ý với điều khoản của Blog</span>
            </label>
          </li>
          <li>
            <a href="index.php?mod=admin&c=auth&act=login">Sign In</a>
          </li>
        </ul>
      </div>
      <!-- //checkbox -->
      <input type="submit" id="success" value="Log In" class="btn_submit">
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

<?php 

    if($_SESSION['login']==true){
        if ($username=='hung') {
            header('Location: index.php?mod=admin&c=category&act=index');
        }else{
                    header('Location: index.php?mod=client&c=category&act=index');
                }
        
    }
 ?>
