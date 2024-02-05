<?php
include 'data.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   
    $userId = $_POST['userId'];
    $password = $_POST['password'];
  

    if (isset($_FILES['upload_file'])) {
        $image = $_FILES['upload_file']['name'];
        $file_tmp = $_FILES['upload_file']['tmp_name'];
        move_uploaded_file($file_tmp, "assets/uploads/" . $image);
    }

    $sql = "INSERT INTO image (userId,password,image)
    VALUES ('$userId','$password','$image')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }


}
?>
