<?php  
    include_once "Database.php";
    $db = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Post</title>
</head>
<body>
    <h1>Single Post</h1>
    <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $data = $db->viewSinglePost($id);
        }
        
        foreach($data as $data):
    ?>
    <h3>Post Title:</h3>
    <?=  $data['title'] ?>
    <h3>Post Description:</h3>
    <?=  $data['description'] ?>

    <?php  
        endforeach;
    ?>
<br><br>
    <button><a href="all-post.php">Back</a></button>
</body>
</html>