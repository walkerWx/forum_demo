<?php
include_once ('includes/db_connect.php');
include_once ('includes/functions.php');
sec_session_start();
if (check_login($mysqli)) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

<html>

<head>

    <title>Log In</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="resources/js/sha512.js"></script>
    <script type="text/javascript" src="resources/js/forms.js"></script>

</head>

<body>

<?php
    if (isset($_GET['error'])) {
        echo '<p class="error">Error Logging In!</p>';
    }
?>


<div class="container">
    <form action="includes/process_login.php" method="post" name="login_form" id="login-form" class="text-left">
        <h2>Log In</h2>
        <div class="form-group">
            <label for="usr">Email:</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="lg_password" name="lg_password">
        </div>
        <button type="button" class="btn btn-primary" onclick="formhash(this.form, this.form.lg_password)">Login</button>
    </form>
    <div class="etc-login-form">
        <p>forgot your password? <a href="forget_password.php">click here</a></p>
        <p>new user? <a href="register.php">register</a></p>
    </div>
    <!--
    if (check_login($mysqli) == true) {
        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']). '</p>';
        echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
    } else {
        echo '<p>Currently logged ' . $logged . '</p>';
        echo "<p>If you don't have an account, please <a href='register.php'>register</a>.</p>";
    }
    -->
</div>


</body>
</html>
