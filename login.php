<?php
include_once ('includes/db_connect.php');
include_once ('includes/functions.php');
session_start();
if (check_login($mysqli)) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

<html>

<head>

    <title>Log in</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://tutorialzine.com/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://tutorialzine.com/build/css/app-a0221d8bac.css">
    <link rel="stylesheet" href="https://tutorialzine.com/build/css/app-820f2b930b.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="resources/js/sha512.js"></script>
    <script type="text/javascript" src="resources/js/forms.js"></script>

</head>

<body>

<?php
    include ("header.php");
?>

<main class="main-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-centered">
                    <div class="section">
                        <div class="panel-heading">
                            <i class="icon-user icon-form"></i>
                            <h2>Login</h2>
                        </div>
                        <div class="alert" hidden>
                            <!--
                                TODO:
                                error msg display
                            -->
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal form--flex" role="form" action="includes/process_login.php" method="post" name="login_form" id="login-form">
                                <?php
                                if (isset($_GET['err_msg'])) {
                                    echo "<div class='form-group has-error'>";
                                } else {
                                    echo "<div class='form-group'>";
                                }
                                ?>
                                    <div class="controls">
                                        <input type="email" class="form-control" id="email" name="email" value required>
                                        <label for="email" data-content="Email">Email</label>
                                        <?php
                                            if (isset($_SESSION['username'])) {
                                                echo "<p>" .$_SESSION['username'] . "</p>";
                                            }
                                        ?>
                                    </div>
                                <?php
                                if (isset($_GET['err_msg'])) {
                                    echo "<span class='help-block'>";
                                    echo "<strong>" . $_GET['err_msg'] . "</strong>";
                                    echo "</span>";
                                }
                                ?>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <input type="password" class="form-control" id="lg_password" name="lg_password" required>
                                        <label for="lg_password" data-content="Password">Password</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" checked="checked" class="filled">
                                            <span class="checkbox__custom checkbox__tick"></span>
                                            <span>Remember Me</span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary animated sign-in" onclick="formhash(this.form, this.form.lg_password)">
                                        <span>Log In</span>
                                    </button>
                                    <a class="btn-link" href="forget_password.php">Forgot Your Password?</a>
                                </div>
                            </form>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



</body>
</html>
