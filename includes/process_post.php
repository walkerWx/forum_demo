<?php
/**
 * Created by PhpStorm.
 * User: xiewang
 * Date: 2017/7/7
 * Time: 15:28
 */

include_once ('db_connect.php');
include_once ('functions.php');

sec_session_start();
if (isset($_POST['post_title'], $_POST['post_content'])) {

    if (!check_login($mysqli)) {
        header("Location:../error.php?err=You must login before you post.");
    }

    if ($stmt = $mysqli->prepare("INSERT INTO topic_post (user_id, title, content, post_date) VALUES (?,?,?,?)")) {
        date_default_timezone_set('Asia/Shanghai');
        $content_array = explode("\n", $_POST['post_content']);
        $content = "";
        foreach ($content_array as $line) {
            $content .= "<p>";
            $content .= $line;
            $content .= "</p>";
        }
        $stmt->bind_param('isss', $_SESSION['user_id'], $_POST['post_title'], $content, date('Y-m-d H:i:s'));
        if (!$stmt->execute()) {
            header("Location:../error.php?err=insert sql failed;");
        } else {
            header("Location:../view_posts.php");
        }
    } else {
        header("Location:../error.php?err=prepare sql failed;");
    }

} else {
    header("Location:../error.php?err=Invalid post request");
}
