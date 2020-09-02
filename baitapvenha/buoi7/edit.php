<?php 
// var_dump($_GET);
include '../buoi6/helper/sql.php';
    $conn = connect();
	$id = $_GET['id'];
	$id = isset($_GET['id'])?$_GET['id']:0;
// $query = "SELECT * FROM post WHERE id =".$id;
// echo $query;
// die();
//thuc thi cau lenh
		// $result = $conn->query($query);
		// $post = $result->fetch_assoc();

	// print_r($category);
	// die();

    $post = detail('post',$id);
 ?>
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
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">UPDATE POST</h3>
    <hr>
        <form action="edit_process.php?id=<?php echo $post['id']?>" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?php echo $post['id'] ?>">
        	<a href="post.php" class="btn btn-primary">BACK-TO-HOME</a>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?php echo $post['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?php echo $post['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail" value="<?php echo $post['thumbnail'] ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" value="<?php echo $post['content'] ?>">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?php echo $post['slug'] ?>">
            </div>
            <div class="form-group">
                <label for="">View_count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count" value="<?php echo $post['view_count'] ?>">
            </div>
            <!-- <div class="form-group">
                <label for="">User_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="user_id" value="<?php echo $post['user_id'] ?>">
            </div> -->
            <div class="form-group">
                <label for="">Category_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_id" value="<?php echo $post['category_id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Created_at</label>
                <input type="date" class="form-control" id="" placeholder="" name="created_at" value="<?php echo $post['created_at'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>