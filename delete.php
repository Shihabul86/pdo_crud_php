<?php  
    include_once "Database.php";
    $db = new Database();

    if (isset($_GET['delete'])) {
        $id = $_GET['id'];
        $id = $db->delete($id);
        header('location:all-post.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <h3>Do you want to delete post ?</h3>
    <form action="" method="POST">
        
        <input type="hidden" name="id" value="<?= $data['id']?>">
        <button type="submit" name="submit">Yes</button>
        
    </form>
    <a href="all-post.php"><button>No</button></a>
    
</body>
</html>