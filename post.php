<?php  
    include_once 'Database.php';
    $db = new Database();

    //insert data
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $db->insertPost($title,$description);
        header('location:all-post.php');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1>Create Post</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        
        <input type="text" name="title" placeholder="Post Title"><br><br>
        <textarea name="description" rows="5" cols="26" placeholder="Post Description"></textarea><br><br>
        <button type="submit" name="submit">Add Post</button>
    </form>
</body>
</html>