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

$page_size = 3;
$current_page = $_GET['current_page']?$_GET['current_page']:1;
$prev_page = $current_page - 1;
$next_page = $current_page + 1;
$offset = ($current_page-1)*$page_size;

$query = "SELECT * FROM topic_post ORDER BY topic_id LIMIT $offset, $page_size";
$post_content = $mysqli->query($query);

$query = "SELECT COUNT(topic_id) FROM topic_post ";
$result = $mysqli->query($query)->fetch_array();
$total_page = floor(($result[0]-1)/$page_size)+1;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://tutorialzine.com/build/css/app-a0221d8bac.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <h1><?php echo $total_page?></h1>
    <div class="container">
        <div class="col-md-9">
            <div class="section section--posts">
                <ul class="posts">
                    <?php
                    if ($post_content->num_rows > 0) {
                        while ($row = $post_content->fetch_assoc()) {
                            echo "<li class='post'>";
                            echo "<div class='post__container'>";

                                echo "<div class='post__header'>";
                                    echo "<div class='post__title'>";
                                    echo "<h4>" . $row['title'] . "</h4>";
                                    echo "</div>";
                                echo "</div>";

                                echo "<div class='post__footer'>";
                                    echo "<div class='post__footer-item'>";
                                    echo "<div class='post__date'>" . $row['post_date'] . "</div>";
                                    echo "</div>";

                                    echo "<div class='post__footer-item'>";
                                    echo "<span>by </span>";
                                    $userinfo = get_userinfo_by_id($row['user_id'], $mysqli);
                                    echo $userinfo['username'];
                                    echo "</div>";
                                echo "</div>";

                            echo "</div>";
                            echo "</li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="page-container">
            <?php
                $pagination = "";
                $pagination .= "<ul class='pagination'>";

                if ($current_page == 1) {
                    $pagination .= "<li class='previous disabled'></li>";
                } else {
                    $pagination .= "<li class='previous'><a href='/view_posts.php?current_page=" . $prev_page . "'></a></li>";
                    $pagination .= "<li><a href='/view_posts.php?current_page=" . $prev_page . "'>" . $prev_page . "</a></li>";
                }

                $pagination .= "<li class='active'><span>" . $current_page . "</span></li>";

                if ($current_page == $total_page) {
                    $pagination .= "<li class='next disabled'>";
                } else {
                    $pagination .= "<li><a href='/view_posts.php?current_page=" . $next_page . "'>". $next_page . "</a></li>";
                    $pagination .= "<li class='next'><a href='/view_posts.php?current_page=" . $next_page . "'></a></li>";
                }

                $pagination .= "</ul>";
                echo $pagination;
            ?>
        </div>
    </div>
</body>
</html>
