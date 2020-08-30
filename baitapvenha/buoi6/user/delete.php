<?php 
// var_dump($_GET);
include 'connect.php';
	$id = $_GET['id'];
	$id = isset($_GET['id'])?$_GET['id']:0;
$query = "SELECT * FROM user WHERE id =".$id;
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
    <title>userES</title>
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
        <form action="delete_process.php?id=<?php echo $user['id']?>" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?php echo $user['id'] ?>">
        	<a href="user.php" class="btn btn-primary">BACK-TO-HOME</a>
            	<table class="table">
            		<thead>
            			
            			<th>ID</th>
            			<th>Name</th>
            			<th>Email</th>

            			<th>Avatar</th>
            			<th>Created_at</th>
            			<th>Action</th>
            			

            		</thead>
            		<tbody>
            			<tr>
            				<td><?php echo $user['id']; ?></td>
            				<td><?php echo $user['name']; ?></td>
            				<td><?php echo $user['email']; ?></td>
            				<td>
            					<img src="<?php echo $user['avatar']?>" alt="" style="width: 60px;">
            				</td>            	
            				<td><?php echo $user['created_at']; ?></td>
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