<?php 
// var_dump($_GET);
    include '../buoi6/helper/sql.php';
    $conn = connect();
	$id = $_GET['id'];
	$id = isset($_GET['id'])?$_GET['id']:0;
//     $query = "SELECT * FROM user WHERE id =".$id;
//      // echo $query;
//      // die();
//      //thuc thi cau lenh
// 		$result = $conn->query($query);
// 		$user = $result->fetch_assoc();

	// print_r($category);
	// die();
    $post = detail('post',$id);
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
        <form action="Detail_process.php?id=<?php echo $user['id']?>" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?php echo $user['id'] ?>">
        	<a href="post.php" class="btn btn-primary">BACK-TO-HOME</a>
            	<table class="table">
            		<thead>
            			
            			<th>ID</th>
                        <th>Title</th>
                        <th>Description</th>

                        <th>Thumbnail</th>
                        <th>Content</th>
                        <th>Slug</th>
                        <th>View_count</th>
                        <!-- <th>User_id</th> -->
                        <th>Category_id</th>
                        <th>Created_at</th>
            			

            		</thead>
            		<tbody>
                    
            			<tr>
            				<td><?php echo $post['id']; ?></td>
                            <td><?php echo $post['title']; ?></td>
                            <td><?php echo $post['description']; ?></td>
                            <td><?php echo $post['thumbnail']; ?></td>
                            <td><?php echo $post['content']; ?></td>  
                            <td><?php echo $post['slug']; ?></td>
                            <td><?php echo $post['view_count']; ?></td>
                            <td><?php echo $post['category_id']; ?></td>            
                            <td><?php echo $post['created_at']; ?></td>
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