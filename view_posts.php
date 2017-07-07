<?php
/**
 * Created by PhpStorm.
 * User: xiewang
 * Date: 2017/7/7
 * Time: 19:15
 */

include_once ('includes/db_connect.php');
include_once ('includes/functions.php');
sec_session_start();

$page_size = 12;
$current_page = $_GET['current_page']?$_GET['current_page']:1;
$offset = ($current_page-1)*$page_size;

$query = "SELECT * FROM topic_post ORDER BY topic_id LIMIT $offset, $page_size";
$result = $mysqli->query($query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <ul>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<ui>" . $row['title'] . $row['content'] . "</ui>";
                }
            }
        ?>
        </ul>
    </div>
</body>
</html>
