<?php  
    class Database{
        public $connection;
        public $hostName="localhost";
        public $dbName="pdo";
        public $dbUserName="root";
        public $dbPassWord="";

        public function __construct(){
            $this->connection = new PDO("mysql:host=$this->hostName;dbname=$this->dbName", $this->dbUserName , $this->dbPassWord);
            if($this->connection){
                //echo 'Connected';
            }else{
                echo 'error';
            }
        }
        //insert
        public function insertPost($title,$description){
            $query = "INSERT INTO posts(title,description) VALUES(:title,:description)";
            $statement = $this->connection->prepare($query);
            $statement->execute(array(
                ':title' => $title,
                ':description' => $description,
            ));
        }
        //view all post
        public function viewAllPost(){
            $query = "SELECT * FROM posts";
            $statement = $this->connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        //view single post
         public function viewSinglePost($id){
            $query = "SELECT * FROM posts WHERE id=".$id;
            $statement = $this->connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        //fetch for update
        public function update($id){
            $query = "SELECT * FROM posts WHERE id=".$id;
            $statement = $this->connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        //update task
        public function updateTask($id,$title,$description){
            $query = "UPDATE posts SET title='$title',description='$description' WHERE id='$id'";
            $statement = $this->connection->prepare($query);
            $statement->execute();
            return 'success';
        }
        //delete
        public function delete($id){
            $query = "DELETE FROM posts WHERE id=$id";
            $statement = $this->connection->prepare($query);
            $statement->execute();
            return 'success';
        }
    }



?>