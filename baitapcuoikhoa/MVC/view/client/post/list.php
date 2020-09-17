<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POST</title>
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
        
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                
                <th>Thumbnail</th>
                <th>Content</th>
                <th>Slug</th>
                <th>View_count</th>
                <th>Category_id</th>
                <th>Created_at</th>
            </thead>
            <?php $i=1; foreach ($post as $post) { ?>
                <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $post['title']; ?></td>
                <td><?php echo $post['description']; ?></td>
                <td><?php echo $post['thumbnail']; ?></td>  
                <td><?php echo $post['content']; ?></td>  
                <td><?php echo $post['slug']; ?></td>  
                <td><?php echo $post['view_count']; ?></td> 
                <td><?php echo $post['category_id']; ?></td>   
                <td><?php echo $post['created_at']; ?></td>
                 <td>
                    <a href="index.php?mod=client&c=post&act=detail&id=<?php echo $post['id']?>" class="btn btn-primary">Detail</a>
                </td>
                </tr>
            <?php $i++; } ?> 
            
            
        </table>
        <a href="index.php?c=auth&mod=admin&act=logout">Logout</a>
    </div>
</body>
</html>