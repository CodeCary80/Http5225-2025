<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secondhand_Record_Selling_Mnagement</title>
</head>
<body>
    
    <?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'secondhand_records');
   
    if(!$connect){
        die("connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM secondhand_records"; 
    
    ?>

</body>
</html>