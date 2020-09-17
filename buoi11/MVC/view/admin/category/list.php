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
    <div class="container-fluid">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="index.php?c=category&mod=admin&act=add" 
        class="btn btn-primary">Add New categories</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Parent_id</th>
                
                <th>Thumbnail</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Created_at</th>
                <th>Image</th>
                <th>Image2</th>
                <th>Image3</th>
                <th>Image4</th>
                <th>Image5</th>
                <th>Action</th>
                
            </thead>
            <?php 
             $i=1; 
            foreach ($categories as $category) { ?>

                <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $category['name']; ?></td>
                <td><?php echo $category['parent_id']; ?></td>
                <td><?php echo $category['thumbnail']; ?></td>  
                <td><?php echo $category['slug']; ?></td>  
                <td><?php echo $category['description']; ?></td>    
                <td><?php echo $category['created_at']; ?></td>
                <td><?php echo $category['image']; ?></td>
                <td><?php echo $category['image2']; ?></td>
                <td><?php echo $category['image3']; ?></td>
                <td><?php echo $category['image4']; ?></td>
                <td><?php echo $category['image5']; ?></td>
                 <td>
                    <a href="index.php?c=category&mod=admin&act=detail&id=<?php echo $category['id']?>" class="btn btn-primary">Detail</a>



                    <a href="index.php?c=category&mod=admin&act=edit&id=<?php echo $category['id']?>" class="btn btn-success">Edit</a>


                    <a href="index.php?c=category&mod=admin&act=delete&id=<?php echo $category['id']?>" class="btn btn-danger">Delete</a>



                </td>
                </tr>
            <?php 
                $i++;
                } 
            ?> 
            
            
        </table>
        <a href="index.php?c=auth&mod=admin&act=logout">Logout</a>
    </div>
</body>
</html>