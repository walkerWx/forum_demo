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

$username = $_SESSION['username'];

$page_size = 12;
if (isset($_GET['current_page'])) {
    $current_page = $_GET['current_page'];
} else {
    $current_page = 1;
}

$query = "SELECT COUNT(topic_id) FROM topic_post ";
$result = $mysqli->query($query)->fetch_array();
$total_page = floor(($result[0]-1)/$page_size)+1;

if ($current_page > $total_page) {
    $current_page = $total_page;
}

$prev_page = $current_page - 1;
$next_page = $current_page + 1;
$offset = ($current_page-1)*$page_size;

$query = "SELECT * FROM topic_post ORDER BY topic_id LIMIT $offset, $page_size";
$post_content = $mysqli->query($query);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://tutorialzine.com/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://tutorialzine.com/build/css/app-a0221d8bac.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
</head>
<body>

<div class="page__wrapper page--posts-index">


    <?php
    include ('header.php');
    ?>

    <main class="main-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 col-centered">
                        <p><?php
                            echo $username;
                            ?></p>
                        <div class="section section--posts">
                            <ul class="posts">
                                <?php
                                if ($post_content->num_rows > 0) {
                                    while ($row = $post_content->fetch_assoc()) {
                                        echo "<li class='post'>";
                                        echo "<div class='post__container'>";

                                        echo "<div class='post__header'>";
                                        echo "<div class='post__title'>";
                                        echo "<a href='view_post.php?topic_id=" . $row['topic_id'] . "'>";
                                        echo "<h4>" . $row['title'] . "</h4>";
                                        echo "</a>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='post__footer'>";
                                        echo "<div class='post__footer-item'>";
                                        echo "<div class='post__date'>" . time_elapsed_string($row['post_date']) . "</div>";
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
                        <div class="pagination__container">
                            <?php
                            $pagination = "";
                            $pagination .= "<ul class='pagination'>";

                            if ($current_page == 1) {
                                $pagination .= "<li class='previous disabled'><span></span></li>";
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
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
