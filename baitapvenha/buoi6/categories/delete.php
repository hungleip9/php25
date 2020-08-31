<?php 
// var_dump($_GET);
include '../helper/connect.php';
	$id = $_GET['id'];
	$id = isset($_GET['id'])?$_GET['id']:0;
$query = "SELECT * FROM categories WHERE id =".$id;
// echo $query;
// die();
//thuc thi cau lenh
        $conn = connect();
		$result = $conn->query($query);
		$categories = $result->fetch_assoc();

	// print_r($category);
	// die();

 ?>
 <!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
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
    <h3 align="center">DELETE CATEGORIES</h3>
    <hr>
        <form action="delete_process.php?id=<?php echo $categories['id']?>" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?php echo $categories['id'] ?>">
        	<a href="categories.php" class="btn btn-primary">BACK-TO-HOME</a>
            	<table class="table">
            		<thead>
            			
                        <th>ID</th>
                        <th>Name</th>
                        <th>Parent_id</th>
                        
                        <th>Thumbnail</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Created_at</th>
                        <th>Action</th>
            			

            		</thead>
            		<tbody>
            			<tr>
            				<td><?php echo $categories['id']; ?></td>
                            <td><?php echo $categories['name']; ?></td>
                            <td><?php echo $categories['parent_id']; ?></td>
                            <td><?php echo $categories['thumb_nail']; ?></td>  
                            <td><?php echo $categories['slug']; ?></td>  
                            <td><?php echo $categories['description']; ?></td>    
                            <td><?php echo $categories['created_at']; ?></td>
            				<td>



            					<button type="submit" class="btn btn-danger">DELETE</button>



            				</td>
            			</tr>
            		</tbody>
            	</table>
            
        </form>
    </div>
</body>
</html>