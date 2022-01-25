<?php  
    include_once 'Database.php';
    $db = new Database();

    //update data
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $data = $db->update($id);
    }
    //update data of form
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $db->updateTask($id,$title,$description);

        header('location:all-post.php?msg=1');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h1>Update Post</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <?php  foreach($data as $data): ?>
        <input type="hidden" name="id" value="<?= $data['id']?>">
        <input type="text" name="title" placeholder="Post Title" value="<?= $data['title']?>"><br><br>
        <textarea name="description" rows="5" cols="26" placeholder="Post Description"><?= $data['description']?></textarea><br><br>
        <button type="submit" name="submit">Update Post</button>
        <?php  endforeach; ?>
    </form>
</body>
</html>