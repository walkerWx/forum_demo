<?php
/**
 * Created by PhpStorm.
 * User: xiewang
 * Date: 2017/7/10
 * Time: 17:18
 */

include_once ('db_connect.php');
include_once ('functions.php');
sec_session_start();

if (isset($_POST['user_id'], $_POST['topic_id'], $_POST['comment_content'])) {

    // check if the user logged in
    if (!check_login($mysqli)) {
        header("Location:../error.php?err=You must login before you comment.");
    }

    $user_id = $_POST['user_id'];
    $topic_id = $_POST['topic_id'];
    $content_array = explode("\n", $_POST['comment_content']);
    $content = "";
    foreach ($content_array as $line) {
        $content .= "<p>";
        $content .= $line;
        $content .= "</p>";
    }

    if ($insert_stmt = $mysqli->prepare("INSERT INTO comment_post (user_id, topic_id, content, post_date)VALUES (?, ?, ?, ?)")) {
        date_default_timezone_set('Asia/Shanghai');
        $insert_stmt->bind_param("iiss", $user_id, $topic_id, $content, date('Y-m-d H:i:s'));
        if (!$insert_stmt->execute()) {
            header("Location:../error.php?err=Insert comment fail");
        } else {
            header("Location:../view_post.php?topic_id=" . $topic_id);
        }
    } else {
        header("Location:../error.php?err=Prepare sql fail");
    }

} else {
    header("Location:../error.php?err=Invalid post request");
}