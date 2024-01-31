<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Form</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/index.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    <form method="post" id="data" action="#">
        <label for="userId">User ID:</label>
        <input type="text" id="userId" name="userId" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" id="submit-button" value="submit">
    </form>
</body>
</html>
