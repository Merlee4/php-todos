<?php

include_once "./database.php";

if(isset($_POST["submit"])){
    if($_POST["title"] && $_POST["task"]){
        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        $task = mysqli_real_escape_string($conn, $_POST["task"]);
    
    
        $sql = "INSERT INTO tasks(title, task, completed) VALUES ('$title', '$task', 'false')";
        mysqli_query($conn, $sql);
        Header("Location: ../index.php?success");
        Header("Location: ../index.php?success");
        
    }else{
        echo "<script> alert('TextFields must not be empty') </script>";
        Header("Location: ../index.php");
    }
    
}else{
    Header("Location: ../index.php?failed");
}