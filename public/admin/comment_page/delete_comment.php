<?php

require_once ("../../../includes/function.php") ;
$session = new Session() ;
if ($session -> is_logged_in() == FALSE) {
    header("location:login.php") ;
}
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = (int) $_GET['id'] ;

    $delete = new comment() ;
    $delete -> deleteComment($id) ;
}
header('location:comment_index.php') ;
