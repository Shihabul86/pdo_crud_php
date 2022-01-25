<?php  
    include_once "Database.php";
    $db = new Database();
    //massage
    if (isset($_GET['msg'])) {
        if($_GET['msg']==1){
            echo 'Data Updated';
        }
    }
    //delete
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $id = $db->delete($id);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Post</title>
</head>
<body>
    <h1>All Post</h1>
    <a href="post.php"><button>Create Post</button></a>
    <table border="1" cellpadding="5px">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Post Date</th>
            <th>Status</th>
        </tr>
        <?php  
            $posts = $db->viewAllPost();
            foreach($posts as $post):
        ?>
        <tr>
            <td><?= $post['id']?></td>
            <td><?= $post['title']?></td>
            <td><?= $post['description']?></td>
            <td><?= $post['post_date']?></td>
            <td>
                <a href="single-post.php?id=<?=$post['id']?>">View</a> |
                <a href="update.php?id=<?=$post['id']?>">Update</a> |
                <a href="all-post.php?delete=<?=$post['id']?>">Delete</a>
            </td>
        </tr>
        <?php  endforeach; ?>
    </table>


   
</body>
</html>