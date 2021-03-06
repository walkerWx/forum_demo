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

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post a post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
    if (isset($_GET['err_msg'])) {
        echo '<p class="error">Error posting!</p>';
    }
?>

<div class="page__wrapper">
    <?php
    include ('header.php');
    ?>

    <div class="cover-layer"></div>
    <main class="main-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section">
                            <div class="panel-heading">
                                <i class="icon-pencil icon-form">
                                    <h2>Create a post</h2>
                                </i>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal form--flex" role="form" method="post" action="includes/process_post.php">
                                    <div class="form-group">

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<div class="container">
    <form action="includes/process_post.php" method="post">
        <h2>Post</h2>
        <label for="usr">Post Title</label>
        <input type="text" class="form-control" id="post_title" name="post_title">
        <div class="form-group">
            <label for="comment">post content:</label>
            <textarea class="form-control" rows="25" id="comment" name="post_content"></textarea>
        </div>
        <div class="form-group">
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary btn-block" >Post</button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                <?php
                if (check_login($mysqli) == true) {
                    echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']). '</p>';
                    echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
                } else {
                    echo '<p>Currently logged ' . $logged . '</p>';
                    echo "<p>If you don't have an account, please <a href='register.php'>register</a>.</p>";
                }
                ?>
            </div>
        </div>
    </form>
</div>

</body>
</html>
