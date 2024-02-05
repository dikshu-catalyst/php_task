<?php
include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Form</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/uploads"></script>
    <link rel="stylesheet" href="assets/css/style.css">
       
</head>
<body>
    <form method="post" id="data" action="#" enctype="multipart/form-data">
        <label for="userId">User ID:</label>
        <input type="text" id="userId" name="userId" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="file" name="upload_file" id="upload_file">
        
        <input type="submit" id="submit-button" value="submit">
    </form>

    <div id="image-container">
    <?php 
        
            $sql = "SELECT * FROM image";
            $result  = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result))  
            {  
                echo "id: ".$row["id"].", user id: ".$row["userId"].", password: ".$row["password"]."" ;
                echo '<img src="assets/uploads/' . $row['image'] . '" alt="Uploaded Image" height="50" width="50">';
                echo '<br>';
            }
            }else{ echo "No result";
        }
        
    ?>
    </div>

</body>
</html>
