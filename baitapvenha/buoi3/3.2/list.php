<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bai 3.1</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script type="text/javascript" src="../jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap.min.js"></script>
    <script type="text/javascript" src="../wow.min.js"></script>
    <link rel="stylesheet" href="../animate.css">
    
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?fbclid=IwAR2rDoDUoo6LgSKq3VFOCWub2nnAlruZMkS9WhVgWYzngGNcPBKTOF3MaYM">

    <script>
        new WOW().init();
    </script>
</head>
<body>
  <?php 
    session_start();
    if (isset($_SESSION['info'])) {
      $data_arr = $_SESSION['info'];
    }
  ?>
    <div class="container">
        <h1 align="center" class="mr_top size_header">Danh Sách Người Dùng</h1>
        <a href="index.php"><button type="submit" class="btn btn-primary">Thêm mới</button></a>
        <?php
          if (isset($_COOKIE["msg"])) {
        ?>
        <div class="alert alert-success" role="alert">
          <strong>Success!!</strong>
          <?php
            echo $_COOKIE["msg"]; 
           ?>
        </div>
        <?php 
          }
         ?>
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Mã Sinh Viên</th>
                  <th scope="col">Họ Tên</th>
                  <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              <?php
                $i = 0;
                foreach ($data_arr as $value) {
                  $i++;
              ?>
      
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $value['ID']; ?></td>
                  <td><?php echo $value['NAME']; ?></td>
                  <td>
                    <a href="detail.php?ID=<?php echo $value['ID']?>"><button type="button" class="btn btn-success mr-right">Detail</button></a><a href="delete.php?ID=<?php echo $value['ID']?>"><button type="button" class="btn btn-danger">Delete</button></a>
                  </td>
                </tr>
                <?php
                  }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>