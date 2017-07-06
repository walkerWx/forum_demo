<?php
/**
 * Created by PhpStorm.
 * User: xiewang
 * Date: 2017/7/6
 * Time: 9:19
 */

include_once ('functions.php');

sec_session_start();

// unset all session values
$_SESSION = array();

// get session parameters
$params = session_get_cookie_params();

// delete the actual cookies
setcookie(session_name(),'', time()-42000, $params['path'], $params['domain'], $params['secure'], $param['httponly']);

// destroy session
session_destroy();

header('Location:../index.php');