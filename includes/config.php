<?php
/**
 * Created by PhpStorm.
 * User: xiewang
 * Date: 2017/7/5
 * Time: 17:34
 */
    define('DB_SERVER', 'localhost:3036');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'forum_demo');
    $db = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD, DB_DATABASE);
?>