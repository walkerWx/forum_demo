<?php
include_once ('includes/functions.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration Success</title>
    <link rel="stylesheet" href="resources/css/main.css"/>
</head>
<body>
<h1>Login successfully!</h1>
<?php
    echo "<p>You are logged in as:" . $_SESSION['username'] . ".</p>";
?>
<p></p>
<p>You can now go back to the <a href="login.php">login page</a> and log in.</p>
</body>
</html>
