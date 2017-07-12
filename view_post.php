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
$commentinfo = get_commentinfo_by_topic_id($topic_id, $mysqli);

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
</head>
<body>
<div class="page__wrapper page--posts-show">

    <?php
    include ('header.php');
    ?>
    <main class="main-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 col-centered">
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
                                            <?php echo time_elapsed_string($topicinfo['post_date']);?>
                                        </time>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <section id="comments">
                                <div class="comments__container">
                                    <h3>Comments
                                        <span class="comment__count"><?php echo count($commentinfo);?></span>
                                    </h3>
                                </div>
                                <div class="comment__add">
                                    <?php
                                    if (check_login($mysqli)) {
                                        // user have logged in so that he can comment directly
                                        echo "<form class='comment__form--main' action='includes/process_comment.php' method='post'>";
                                        echo "<input type='hidden' name='topic_id' value='" . $topic_id .  "'>";
                                        echo "<input type='hidden' name='user_id' value='" . $userinfo['user_id'] .  "'>";
                                        echo "<div class='form-group'>";
                                        echo "<textarea type='text' class='form-control simplemde-text' name='comment_content' placeholder='Add comment' required></textarea>";
                                        echo "</div>";
                                        echo "<div class='form-group inside'>";
                                        echo "<input type='submit' class='btn btn-primary add-comment filled' value='Add reply'>";
                                        echo "</div>";
                                        echo "</form>";
                                    } else {
                                        // user haven't logged in yet, show login button

                                        echo "<div class='login-card'>";
                                        echo "<a href='login.php' class='btn btn-primary'><span>Login to comment</span></a>";
                                        echo "</div>";
                                    }
                                    ?>
                                </div>
                                <div class="comments__list-wrapper">
                                    <div id="comment__preview" style="display: none;"></div>
                                    <ul class="comments__list">
                                        <?php
                                        foreach ($commentinfo as $comment) {
                                            echo "<li class='comment__list-item'>";
                                            echo "<article class='comment__container first'>";
                                            echo "<div class='comment__user collapse-comment'>";
                                            echo "<a href='' class='image-wrapper'>";
                                            echo "<div class='comment__user-avatar' style=\"background-image: url('https://www.gravatar.com/avatar/34b98759bb94f6142b0fc0c815f92ca1?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')\"></div>";
                                            echo "</a>";
                                            echo "<div class='username-left'>";
                                            echo "<div class='comment__user-badge'>";
                                            echo "<a href='' class='neon'>";
                                            echo $comment['username'];
                                            echo "</a>";
                                            echo "</div>";
                                            echo "<time datetime='" . $comment['post_date'] . "'>";
                                            echo "<a href='' class='neon'>";
                                            echo time_elapsed_string($comment['post_date']);
                                            echo "</a>";
                                            echo "</time>";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "<div class='collapsible'>";
                                            echo "<div class='comment__wrapper'>";
                                            echo "<div class='comment__right'>";
                                            echo "<div class='comment__text'>";
                                            echo $comment['content'];
                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "<div class='comment__child'></div>";
                                            echo "</div>";
                                            echo "</article>";
                                            echo "</li>";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </section>

                        </article>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
