<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    include "../classes/Blog.php";
    $blog = new Blog();
    $blog->deletePostById($id);
    header('location:../blog_post.php');
}

 
?>