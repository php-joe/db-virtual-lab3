<!DOCTYPE html>
<html>
<head>
<title>PHP/Database Vitual Lab Assignment</title>
</head>
<body>
<h2>Virtual Lab Assignment: DB3</h2>
<p>

<form action="process.php" method="POST">
    <label for="firstName">First Name:</label>
    <input type="text" placeholder="First Name" name="firstName" />
    <br><br>

    <label for="lastName">Last Name:</label>
    <input type="text" placeholder="Last Name" name="lastName" />
    <br><br>

    <label for="password">Password:</label>
    <input type="text" placeholder="Password" name="password" />
    <br><br>

    <label for="title">Title:</label>
    <select name="title">
      <option value="0">Mrs.</option>
      <option value="1">Ms.</option>
      <option value="2">Mr.</option>
      <option value="3">Undetirmined</option>
    </select>
    <br><br>

    <label for="beatle">Favorite Beatle:</label>
    <select name="beatle">
      <option value="0">George</option>
      <option value="1">Ringo</option>
      <option value="2">Paul</option>
      <option vlaue="3">John</option>
    </select>
  <br><br>

  <input type="submit"/>
</form>
</p>
<p>
<?php require_once('mylib.php');
$myUN = new User();
?>
</p>
</body>
</html>
