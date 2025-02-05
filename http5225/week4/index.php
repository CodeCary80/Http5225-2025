<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week4</title>
</head>
<body>
<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
$url = "https://jsonplaceholder.typicode.com/users";
$data = file_get_contents($url);
return json_decode($data, true);


}
// Get the list of users
$users = getUsers();

//$x = i (JS)
//count($users) = count(id)
//$users[$x]= getUsers($x)= getUsers(i)(in JS)
//$users[$x]['name']= $x.name(in JS)
for($x = 0; $x < count($users); $x++){
    echo "Name: " . $users[$x]['name'] . "<br>";
    echo '<a href="mailto:">' . $users[$x]['email'] . " </a><br>"; 
    //echo '<a href="linkto:">' . $users[$x]['addres'] . "</a><br>";
}

?>
</body>
</html>