<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <style type="text/css">
        .input_content input{
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">UPDATE Category</h3>
    <hr>
        <form action="index.php?c=home&mod=admin&act=update" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $category['id'] ?>">
            <a href="index.php?c=home&mod=admin&act=index" class="btn btn-primary">BACK-TO-HOME</a>
            
            <div class="form-group">
                <label for="">Ý Nghĩa</label>               
                <textarea class="form-control" id="summernote5" name="ynghia1"><?php echo $category['ynghia1'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Bối Cảnh</label>
                <textarea class="form-control" id="summernote6" name="ynghia2"><?php echo $category['ynghia2'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Diễn Biến</label>
                <textarea class="form-control" id="summernote7" name="ynghia3"><?php echo $category['ynghia3'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Nhân Vật</label>
            </div>
            <textarea class="form-control" id="summernote8" name="ynghia4"><?php echo $category['ynghia4'] ?></textarea>
            
           <button class="btn btn-primary">Create</button>
           <a href="index.php?c=auth&mod=admin&act=logout">Logout</a>
            
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>

        $(document).ready(function() {
          $('#summernote').summernote();
          $('#summernote2').summernote();
          $('#summernote3').summernote();
          $('#summernote4').summernote();
          $('#summernote5').summernote();
          $('#summernote6').summernote();
          $('#summernote7').summernote();
          $('#summernote8').summernote();
      });
  </script>
</body>
</html>