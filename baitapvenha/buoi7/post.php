<?php 

include '../buoi6/helper/sql.php';
$conn = connect();
$post_id=1;

// $query ="UPDATE `post` SET `password` = 'hungle' WHERE `post`.`id`=" . $post_id;

// echo $query;

//thuc thi cau lenh
    
// 	$query = "SELECT * FROM post";
// 	$result = $conn->query($query);
// //tao 1 mang de lay du lieu

// 	$postes = array();
// 		while($row = $result -> fetch_assoc()){
// 			$posts[] = $row;
// 		}
    $post = select('post');
 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>post</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POST ---</h3>
        <a href="post_add.php" class="btn btn-primary">Add New post</a>
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
            <?php 
                $i=1;
            foreach ($post as $post) { ?>
            	<tr>
            	<td><?php echo $i ?></td>
            	<td><?php echo $post['title']; ?></td>
            	<td><?php echo $post['description']; ?></td>
                <td><?php echo $post['thumbnail']; ?></td>
            	<td><?php echo $post['content']; ?></td>  
                <td><?php echo $post['slug']; ?></td>
                <td><?php echo $post['view_count']; ?></td>
                <td><?php echo $post['category_id']; ?></td>         	
            	<td><?php echo $post['created_at']; ?></td>
            	 <td>
                    <a href="detail.php?id=<?php echo $post['id']?>" class="btn btn-primary">Detail</a>



                    <a href="edit.php?id=<?php echo $post['id']?>" class="btn btn-success">Edit</a>


                    <a href="delete.php?id=<?php echo $post['id']?>" class="btn btn-danger">Delete</a>



                </td>
            	</tr>
            <?php 
            $i++;
        } ?> 
            
            
        </table>
    </div>
</body>
</html>