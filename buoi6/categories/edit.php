<?php 
// var_dump($_GET);
include 'connect.php';
	$id = $_GET['id'];
	$id = isset($_GET['id'])?$_GET['id']:0;
$query = "SELECT * FROM categories WHERE id =".$id;
// echo $query;
// die();
//thuc thi cau lenh
		$result = $conn->query($query);
		$category = $result->fetch_assoc();

	// print_r($category);
	// die();

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
    <h3 align="center">UPDATE Category</h3>
    <hr>
        <form action="categorie_edit_process.php?id=<?php echo $category['id']?>" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?php echo $category['id'] ?>">
        	<a href="categories.php" class="btn btn-primary">BACK-TO-HOME</a>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $category['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?php echo $category['description'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>