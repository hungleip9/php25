<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
    <div class="container">
        <h3 class="text-center">Thông tin Danh muc</h3>
        <ul>
            <li>Id : <?php echo $user['id']; ?></li>
            <li>Name : <?php echo $user['name']; ?></li>
            <li>Email : <?php echo $user['email']; ?></li>
            <li>Avatar : <?php echo $user['avatar'] ?></li>
            <li>Created : <?php echo $user['created_at'] ?></li>
            
        </ul>
        <a href="index.php?mod=user&act=list" class="btn btn-primary">Back</a>
    </div>
 </body>
 </html>
