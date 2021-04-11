<?php 
    include_once "./backend/database.php"; 
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css<?php time() ?>">
    <title>PHP TODOS</title>
</head>
<body>
    <nav>
        <h1>PHP Todos </h1>
    </nav>
    <form method="POST" action="./backend/create.php">
         <input type="text" name="title" placeholder="Title...">
         <input type="text" name="task" placeholder="Type Here...">
         <button type="submit" name="submit">Add!</button>
    </form>
    <main>
  
    <?php
        $sql = "SELECT * FROM tasks;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck > 0){
            while($rows = mysqli_fetch_assoc($result)){
                echo '
                <form id="card" method="POST" action="./backend/delete.php">
                   <h2>'.$rows["title"].'</h2>
                  <div style="display">
                    <p>'.$rows["task"].'</p>
                    <button name="delete"> Delete</button>
                    <input type="hidden" name="id" value="'.$rows["id"].'"/>  
                  </div>
                </form>
            ';
            }
        }else{
            echo 
            '<div id="notask" >
                <h1>No Tasks at the moment</h1>
            </div>';
        }
    ?>
    </main>
</body>
</html>