<?php
include 'data.php';


if(isset($_POST['deleteButton'])) {
    $deleteUserId = $_POST['deleteUserId'];
    $deleteQuery = "DELETE FROM image WHERE userId = '$deleteUserId'";
    mysqli_query($conn, $deleteQuery);
    // Refresh the page or redirect as needed
    header("Location: ".$_SERVER['PHP_SELF']);
}
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
    <form class="form" method="post" id="data" action="#" enctype="multipart/form-data">
        <label for="userId">User ID:</label>
        <input type="text" id="userId" name="userId" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="file" name="upload_file" id="upload_file">
        
        <input type="submit" id="submit-button" value="submit">
    </form>

    <div id="image-container">
    <table>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Password</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        
    <?php 
        $sql = "SELECT * FROM image";
        $result  = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {  
                echo '<tr>';
                echo '<td>'.$row["id"].'</td>';
                echo '<td>'.$row["userId"].'</td>';
                echo '<td>'.$row["password"].'</td>';
                echo '<td><img src="assets/uploads/' . $row['image'] . '" alt="Uploaded Image" height="50" width="50"></td>';
                echo '<td>';
                echo '<form method="post" action="#">';
                echo '<input type="hidden" name="deleteUserId" value="' . $row['userId'] . '">';
                echo '<input id="delete" type="submit" name="deleteButton" value="Delete">';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }
        } else { 
            echo '<tr><td colspan="5">No result</td></tr>';
        }
    ?>
    </table>
    </div>

</body>
</html>
