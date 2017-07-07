<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forum Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="resources/js/sha512.js"></script>
    <script type="text/javascript" src="resources/js/forms.js"></script>
</head>
<body>
<div class="container">

<h1>Register with us</h1>
<?php
if (!empty($error_msg)) {
    echo $error_msg;
}
?>
<ul class="list-group">
    <li class="list-group-item">Usernames may contain only digits, upper and lowercase letters and underscores</li>
    <li class="list-group-item">Emails must have a valid email format</li>
    <li class="list-group-item">Passwords must be at least 6 characters long</li>
    <li class="list-group-item">Passwords must contain:
        <ul>
            <li>At least one uppercase letter (A..Z)</li>
            <li>At least one lowercase letter (a..z)</li>
            <li>At least one number (0..9)</li>
        </ul>
    </li>
    <li class="list-group-item">Your password and confirmation must match exactly</li>
</ul>
    <form class="form-horizontal" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" name="registration_form">
        <div class="form-group">
            <label class="control-label col-sm-2" for="username">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="reg_password" name="reg_password">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Confirm password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="reg_confirm" name="reg_confirm">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="button" class="btn btn-primary" onclick="return regformhash(this.form, this.form.username, this.form.email, this.form.reg_password, this.form.reg_confirm);">Register</button>
            </div>
        </div>
        <p>Return to the <a href="login.php">login page</a>.</p>
    </form>
</div>
</body>
</html>
