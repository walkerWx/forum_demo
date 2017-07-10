<?php
/**
 * Created by PhpStorm.
 * User: xiewang
 * Date: 2017/7/5
 * Time: 18:59
 */
    include_once('config.php');
    include_once ('db_connect.php');

    function sec_session_start() {
        $session_name = 'forum_demo';
        $secure = true;
        $httponly = true;
        if (ini_set('session.use_only_cookies', 1) == false) {
            header("Location:../error.php?err=Could not initiate a safe session");
            exit();
        }

        $cookieParams = session_get_cookie_params();
        session_set_cookie_params($cookieParams["lifetime"],
            $cookieParams["path"],
            $cookieParams["domain"],
            $secure,
            $httponly);

        session_start();
        //session_regenerate_id(true);
    }

    function login($email, $password, $mysqli) {
        if ($stmt = $mysqli->prepare("SELECT user_id, username, password FROM user WHERE email = ? LIMIT 1")) {
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->store_result();

            // get variables from result
            $user_id = 0;
            $username = "";
            $db_password = "";
            $stmt->bind_result($user_id, $username, $db_password);
            $stmt->fetch();

            if ($stmt->num_rows == 1) {

                // check whether the user is locked because of too many failed login
                /*
                if (check_brute($user_id, $mysqli)) {
                    // the user is locked
                    // TODO:
                    //send an email to the user to inform that the account is locked
                    return false;
                }
                */

                if (password_verify($password, $db_password)) {
                    error_log("password verify success.");
                    // password correct!
                    // get the user agent string of the user
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];
                    // XSS protection as we might print the value
                    $user_id = preg_replace("/[^0-9]+/", "", $user_id);
                    $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);

                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['login_string'] = hash('sha512', $db_password . $user_browser);

                    // login success
                    return true;
                } else {
                    error_log("password verify failed.");
                }

            } else {
                // User does not exist
                return false;
            }
        }
        return false;
    }

    // check whether the user is trying to login by brute force
    function check_brute($user_id, $mysqli) {

        // get timestamp of current time
        $now = time();

        // all login attempts are counted from the past 2 hour
        $valid_attempts = $now - (2*60*60);

        if ($stmt = $mysqli->prepare("SELECT time FROM login_attempts WHERE  user_id = ? AND time > '$valid_attempts'")) {
            $stmt->bind_param('i', $user_id);
            $stmt->execute();
            $stmt->store_result();

            // if there have been over 5 failed logins
            if ($stmt->num_rows > 5) {
                return true;
            } else {
               return false;
            }

        }
    }

    function check_login($mysqli) {
        // check if all session variables are set
        if (isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])) {
            $user_id = $_SESSION['user_id'];
            $login_string = $_SESSION['login_string'];
            $username = $_SESSION['username'];

            // get the user-agent string of the user
            $user_browser = $_SERVER['HTTP_USER_AGENT'];

            if ($stmt = $mysqli->prepare("SELECT password FROM user WHERE user_id = ? LIMIT 1")) {
                $stmt->bind_param('i', $user_id);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows == 1) {
                    $password = "";
                    $stmt->bind_result($password);
                    $stmt->fetch();
                    $login_check = hash('sha512', $password . $user_browser);
                    if (hash_equals($login_check, $login_string)) {
                        // Logged in!
                        return true;
                    }
                }
            }
        }

        // Not logged in
        return false;
    }

    function esc_url($url) {

        if ('' == $url) {
            return $url;
        }

        $url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);

        $strip = array('%0d', '%0a', '%0D', '%0A');
        $url = (string) $url;

        $count = 1;
        while ($count) {
            $url = str_replace($strip, '', $url, $count);
        }

        $url = str_replace(';//', '://', $url);

        $url = htmlentities($url);

        $url = str_replace('&amp;', '&#038;', $url);
        $url = str_replace("'", '&#039;', $url);

        if ($url[0] !== '/') {
            // We're only interested in relative links from $_SERVER['PHP_SELF']
            return '';
        } else {
            return $url;
        }

    }

    function get_userinfo_by_id($user_id, $mysqli) {
        if ($stmt = $mysqli->prepare("SELECT user_id, email, username FROM user WHERE user_id = ?")) {
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $user_id = 0;
            $username = "";
            $email = "";
            $stmt->bind_result($user_id, $email, $username);
            $stmt->fetch();

            $userinfo = array();
            $userinfo['user_id'] = $user_id;
            $userinfo['email'] = $email;
            $userinfo['username'] = $username;
            return $userinfo;
        }
    }

    function get_topicinfo_by_id($topic_id, $mysqli) {

        $topicinfo = array();
        $user_id = 0;
        $title = "";
        $content = "";
        $post_date = "";

        if ($stmt = $mysqli->prepare("SELECT topic_id, user_id, title, content, post_date FROM topic_post WHERE topic_id = ?")) {
            $stmt->bind_param("i", $topic_id);
            $stmt->execute();
            $stmt->bind_result($topic_id, $user_id, $title, $content, $post_date);
            $stmt->fetch();
        }

        $topicinfo['topic_id'] = $topic_id;
        $topicinfo['user_id'] = $user_id;
        $topicinfo['title'] = $title;
        $topicinfo['content'] = $content;
        $topicinfo['post_date'] = $post_date;

        $userinfo = get_userinfo_by_id(intval($user_id), $mysqli);
        $topicinfo['username'] = $userinfo['username'];

        return $topicinfo;
    }



