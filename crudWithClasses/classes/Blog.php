<?php
class Blog{

    // function for creating post
   public function createPost($title, $body, $image_name){
        include "../config/db_connect.php";
        $sql = "INSERT INTO post (title, body, passport) VALUES(?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $insert_post = $stmt->execute([$title, $body, $image_name]);
        return $insert_post;
    }


    //function to get all post
    public function getAllPosts(){
        // in including our db_connect file, it is dependent on where you are calling the function.
        include "config/db_connect.php";
        $sql = " SELECT * FROM `post` ORDER BY id DESC ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $posts;

    }


    // function to get post by id
    public function getPostById($id){
        include "config/db_connect.php";
        $sql = "SELECT * FROM `post` WHERE id=?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
        $posts = $statement->fetch(PDO::FETCH_ASSOC);
        return $posts;

    }


    // function to update post with images
    public function updatePostWithImage($title, $body, $image_name, $id){
        include "../config/db_connect.php";
        $update_sql = "UPDATE post SET title=?, body=?, passport=? WHERE id=?";
        $update_stmt =$pdo->prepare($update_sql);
        $update_post = $update_stmt->execute([$title, $body, $image_name, $id]);
        return $update_post;
    }

     // function to update post without images
     public function updatePostWithoutImage($title, $body, $id){
        include "../config/db_connect.php";
        $update_sql = "UPDATE post SET title=?, body=? WHERE id=?";
        $update_stmt =$pdo->prepare($update_sql);
        $update_post = $update_stmt->execute([$title, $body, $id]);
        return $update_post;
        

    }


    // function to delete post by id
    public function deletePostById($id){
        include "../config/db_connect.php";
        $sql = "DELETE FROM post WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt;

    }

}


?>
