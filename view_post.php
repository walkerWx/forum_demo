<?php
/**
 * Created by PhpStorm.
 * User: xiewang
 * Date: 2017/7/10
 * Time: 14:46
 */

include_once ('includes/db_connect.php');
include_once ('includes/functions.php');
sec_session_start();

$topic_id = $_GET['topic_id'];
$topicinfo = get_topicinfo_by_id($topic_id, $mysqli);
$userinfo = get_userinfo_by_id($topicinfo['user_id'], $mysqli);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://tutorialzine.com/build/css/app-a0221d8bac.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container page--posts-show">
        <div class="col-md-9">
            <article class="post discussion">
                <div class="post__header">
                    <div class="post__title">
                        <h4><?php echo $topicinfo['title'];?></h4>
                    </div>
                </div>
                <div class="post__body">
                    <div class>
                        <?php echo $topicinfo['content'];?>
                    </div>
                </div>
                <div class="post__footer">
                    <div class="comment__user">
                        <a href="" class="image-wrapper">
                            <div class="comment__user-avatar" style="background-image: url('https://www.gravatar.com/avatar/34b98759bb94f6142b0fc0c815f92ca1?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')"></div>
                        </a>
                        <div class="user-name--left">
                            <div class="comment__user-badge">
                                <a href="" class="neon"><?php echo $userinfo['username'];?></a>
                            </div>
                            <time datetime="<?php echo $topicinfo['post_date'];?>">
                                <!--
                                    TODO:
                                    Calculate date distance and print
                                -->
                                2 weeks ago
                            </time>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
            </article>
        </div>
    </div>
</body>
</html>
