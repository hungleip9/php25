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
		$user = $result->fetch_assoc();

	// print_r($category);
	// die();

 ?>
 <!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Categories-detail</title>
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
    <h3 align="center">DELETE User</h3>
    <hr>
        <form action="Detail_process.php?id=<?php echo $user['id']?>" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?php echo $user['id'] ?>">
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
            				<td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['parent_id']; ?></td>
                            <td><?php echo $user['thumbnail']; ?></td>  
                            <td><?php echo $user['slug']; ?></td>  
                            <td><?php echo $user['description']; ?></td>    
                            <td><?php echo $user['created_at']; ?></td>
            				<td>



            					



                                <a href="edit.php?id=<?php echo $user['id']?>" class="btn btn-success">Edit</a>


                                 <a href="delete.php?id=<?php echo $user['id']?>" class="btn btn-danger">Delete</a>



            				</td>
            			</tr>
            		</tbody>
            	</table>
            
        </form>
    </div>
</body>
</html>