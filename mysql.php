<?php
require_once('config.php');

$myUN = new User();
$myUN -> userName();
// Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DB);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$firstName = $myUN->getStuff(0);
$lastName = $myUN->getStuff(1);
$password = $myUN->getStuff(2);
$title = $myUN->getStuff(3);
$beatle = $myUN->getStuff(4);
$username = $myUN->getStuff(5);


$sql = "INSERT INTO userinfo (firstName, lastName, password, title, beatle, username)
VALUES ('$firstName', '$lastName', '$password', '$title', '$beatle', '$username')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
