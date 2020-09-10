<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>categories</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="view/category/add.php" class="btn btn-primary">Add New categories</a>
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
            <?php foreach ($categories as $categories) { ?>
                <tr>
                <td><?php echo $categories['id']; ?></td>
                <td><?php echo $categories['name']; ?></td>
                <td><?php echo $categories['parent_id']; ?></td>
                <td><?php echo $categories['thumbnail']; ?></td>  
                <td><?php echo $categories['slug']; ?></td>  
                <td><?php echo $categories['description']; ?></td>    
                <td><?php echo $categories['created_at']; ?></td>
                 <td>
                    <a href="detail.php?id=<?php echo $categories['id']?>" class="btn btn-primary">Detail</a>



                    <a href="view/category/edit.php?id=<?php echo $categories['id']?>" class="btn btn-success">Edit</a>


                    <a href="delete.php?id=<?php echo $categories['id']?>" class="btn btn-danger">Delete</a>



                </td>
                </tr>
            <?php } ?> 
            
            
        </table>
    </div>
</body>
</html>