<?php
include_once "./database.php";
session_start();

if(isset($_POST["delete"])){
    $_SESSION["count"] = $_SESSION["count"] - 1;
    $task_id = $_POST["id"];
    $sql = "DELETE FROM tasks WHERE id='$task_id'";
    mysqli_query($conn, $sql);
    Header("Location: ../index.php");
    echo '<script> alert("deleted") </script>';
}