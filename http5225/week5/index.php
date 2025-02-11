<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week5</title>
</head>
<body>
    
    <?php

    //connection string
    //sql password: root
    $connect = mysqli_connect('localhost', 'root', 'root', 'CSV_DB 7');

    if(!$connect){
        die("connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM colors"; 
    $colors = mysqli_query($connect, $query);
    
    //checks if there are any rows returned
    if(mysqli_num_rows($colors) > 0){ 
        while($row = mysqli_fetch_assoc($colors)){ //gets each row as an associative array where
            echo "<div style='display:block; background-color: {$row['Hex']}; text-align: center;'>";
            echo $row['Name'];
            echo "</div>";
        }
    }else{
        echo "No colors found";
    }

    mysqli_close($connect);
    
    ?>

</body>
</html>