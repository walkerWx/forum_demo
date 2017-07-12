<?php
/**
 * Created by PhpStorm.
 * User: xiewang
 * Date: 2017/7/5
 * Time: 21:27
 */
include_once ('db_connect.php');
include_once ('functions.php');
sec_session_start();

if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // the hashed password

    if (login($email, $password, $mysqli) == true) {
        // login success
        header('Location:../view_posts.php');
    } else {
        // login failed
        header('Location:../login.php?error=1');
    }
} else {
    // the correct POST variables were not sent to this page
    echo 'Invalid Request';
}