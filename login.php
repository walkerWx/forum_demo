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
    <link href='resources/css/main.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="resources/js/sha512.js"></script>
    <script type="text/javascript" src="resources/js/forms.js"></script>

    <!-- All the files that are required -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

</head>

<body>

<?php
    if (isset($_GET['error'])) {
        echo '<p class="error">Error Logging In!</p>';
    }
?>

<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0; width:600px; margin:0 auto;">
    <div class="logo">login</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form action="includes/process_login.php" method="post" name="login_form" id="login-form" class="text-left">
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="email" class="sr-only">Username</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="lg_password" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
                    </div>
                    <div class="form-group login-group-checkbox">
                        <input type="checkbox" id="lg_remember" name="lg_remember">
                        <label for="lg_remember">remember</label>
                    </div>
                </div>
                <button type="button" class="login-button"><i class="fa fa-chevron-right" onclick="formhash(this.form, this.form.lg_password)"></i></button>
                <input type="button" value="Login" onclick="formhash(this.form, this.form.lg_password)">
            </div>
            <div class="etc-login-form">
                <p>forgot your password? <a href="forget_password.php">click here</a></p>
                <p>new user? <a href="register.php">create new account</a></p>
            </div>
        </form>
    </div>
    <!-- end:Main Form -->
</div>
<?php
    if (check_login($mysqli) == true) {
        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']). '</p>';
        echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
    } else {
        echo '<p>Currently logged ' . $logged . '</p>';
        echo "<p>If you don't have an account, please <a href='register.php'>register</a>.</p>";
    }
?>
</body>
</html>
