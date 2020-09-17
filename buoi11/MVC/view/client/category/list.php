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
                 <td>
                    <a href="index.php?c=category&mod=client&act=detail&id=<?php echo $category['id']?>" class="btn btn-primary">Detail</a>



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