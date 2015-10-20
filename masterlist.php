<?php
require_once('config.php');

// Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DB);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$masterList = "SELECT * FROM vl3.userinfo LIMIT 300";
$results = mysqli_query($conn, $masterList);
$resultsArray = mysqli_fetch_array($results);
$tbody = '';



  //output data for each row
  while($userinfo = mysqli_fetch_assoc($results)) {
    $tbody .= "<tr><td>"
      . $userinfo['id'] . "</td><td>"
      . $userinfo['firstName'] . "</td><td>"
      . $userinfo['lastName'] . "</td><td>"
      . $userinfo['password'] . "</td><td>"
      . $userinfo['title'] . "</td><td>"
      . $userinfo['beatle'] . "</td><td>"
      . $userinfo['username'] . "</td></tr>";


}


?>

<table>
  <thead>
    <tr>
      <th>ID: </th>
      <th>First Name: </th>
      <th>Last Name: </th>
      <th>Password: </th>
      <th>Title: </th>
      <th>Favorite Beatle: </th>
      <th>Username: </th>
    </tr>
  </thead>
  <tbody>
    <?php echo $tbody; ?>
  </tbody>
</table>
