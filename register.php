<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <script type="text/JavaScript" src="resources/js/sha512.js"></script>
    <script type="text/JavaScript" src="resources/js/forms.js"></script>
    <link rel="stylesheet" href="resources/css/main.css" />
</head>
<body>
<h1>Register with us</h1>
<?php
if (!empty($error_msg)) {
    echo $error_msg;
}
?>
<ul>
    <li>Usernames may contain only digits, upper and lowercase letters and underscores</li>
    <li>Emails must have a valid email format</li>
    <li>Passwords must be at least 6 characters long</li>
    <li>Passwords must contain
        <ul>
            <li>At least one uppercase letter (A..Z)</li>
            <li>At least one lowercase letter (a..z)</li>
            <li>At least one number (0..9)</li>
        </ul>
    </li>
    <li>Your password and confirmation must match exactly</li>
</ul>
<form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" name="registration_form">
    Username: <input type='text' name='username' id='username' /><br>
    Email: <input type="text" name="email" id="email" /><br>
    Password: <input type="password" name="reg_password" id="reg_password"/><br>
    Confirm password: <input type="password" name="reg_confirmpwd" id="reg_confirmpwd" /><br>
    <input type="button" value="Register" onclick="return regformhash(this.form, this.form.username, this.form.email, this.form.reg_password, this.form.reg_confirmpwd);" />
</form>
<p>Return to the <a href="login.php">login page</a>.</p>
</body>
</html>
