<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USER</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- USER ---</h3>
        <a href="AddUser" class="btn btn-primary">Add New User</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Avatar</th>
                <th>Created_at</th>
                <th>Action</th>
            </thead>
            <?php 
                $i=1;
            foreach ($user as $user) { ?>
            	<tr>
            	<td><?php echo $i ?></td>
            	<td><?php echo $user['name']; ?></td>
            	<td><?php echo $user['email']; ?></td>
                <td><?php echo $user['password']; ?></td>
            	<td>
            		<img src="<?php echo $user['file']?>" alt="" style="width: 60px;">
            	</td>            	
            	<td><?php echo $user['created_at']; ?></td>
            	 <td>
                    <a href="index.php?mod=admin&c=user&act=detail&id=<?php echo $user['id']?>" class="btn btn-primary">Detail</a>



                    <a href="index.php?mod=admin&c=user&act=edit&id=<?php echo $user['id']?>" class="btn btn-success">Edit</a>


                    <a href="index.php?mod=admin&c=user&act=delete&id=<?php echo $user['id']?>" class="btn btn-danger">Delete</a>
                   



                </td>
            	</tr>
            <?php 
            $i++;
        } ?> 
            
            
        </table>
        <a href="index.php?%20c=home&mod=admin&act=index" class="btn btn-primary">Back</a>
        <a href="index.php?c=auth&mod=admin&act=logout">Logout</a>
    </div>
</body>
</html>