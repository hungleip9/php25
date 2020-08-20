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
    <div class="container">
        <form action="add_process.php" method="POST" role="form">
            <legend align="center"><h1><b>ZENT GROUP - PHP - SESSION</b></h1></legend>
            
            <div class="form-group">
                <label for="">Mã Sinh Viên</label>
                <input type="text" class="form-control size_sp" id="" placeholder="Nhập mã sinh viên" name="ID">
            </div>
            
            <div class="form-group">
                <label for="">Họ Tên</label>
                <input type="text" class="form-control size_sp" id="" placeholder="Nhập Họ tên" name="NAME">
            </div>

            <div class="form-group">
                <label for="">Số Điện Thoại</label>
                <input type="text" class="form-control size_sp" id="" placeholder="Nhập số điện thoại" name="PHONE">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control size_sp" id="" placeholder="Nhập email" name="EMAIL">
            </div>

            <div class="form-group">
                <label for="">Giới Tính</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="GENDER" id="inlineRadio1" value="Male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="GENDER" id="inlineRadio2" value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="GENDER" id="inlineRadio3" value="Other">
                    <label class="form-check-label" for="inlineRadio2">Other</label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control size_sp" id="" placeholder="Nhập địa chỉ" name="ADR">
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Lưu Thông Tin</button>
        </form>
    </div>
    
</body>
</html>