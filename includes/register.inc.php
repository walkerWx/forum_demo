<?php
/**
 * Created by PhpStorm.
 * User: xiewang
 * Date: 2017/7/6
 * Time: 9:35
 */

include_once ('config.php');
include_once ('db_connect.php');

$error_msg = "";

if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    // sanitize and validate the data passed in
    $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // not a validate email
        $error_msg .= '<p class="error"> The email address you entered is not valid.</p>';
    }

    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // the hashed pwd should be 128 characters long.
        $error_msg .= '<p class="error"> Invalid password configuration.</p>';
    }

    // username validity and password validity have been checked client side.
    $prep_stmt = "SELECT user_id FROM user WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);

    // check existing email
    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == 1) {
            // a user with this email address already exist
            $error_msg .= '<p class="error"> A user with this email address already exist.</p>';
            $stmt->close();
        }
    } else {
        $error_msg .= '<p class="error">Database error(checking existing email).</p>';
        $stmt->close();
    }

    // check existing username
    $prep_stmt =  "SELECT user_id FROM user WHERE username = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
    if ($stmt) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == 1) {
            // a user with this username already exist
            $error_msg = '<p class="error">A user with this username already exist.</p>';
            $stmt->close();
        }
    } else {
        $error_msg = '<p class="error">Database error(checking existing username).</p>';
        $stmt->close();
    }

    if (empty($error_msg)) {
        // create hashed password using the password_hash function
        // this function salts it with a random salt and can be verified with the password_verify function
        $password = password_hash($password, PASSWORD_BCRYPT);

        // insert the new user to the database
        if ($insert_stmt = $mysqli->prepare("INSERT INTO user (email , username, password) VALUES (?, ?, ?)")) {
            $insert_stmt->bind_param('sss', $email, $username, $password);
            // execute the prepared query
            if (!$insert_stmt->execute()) {
                header('Location:../error.php?err=Registration failure:Insert');
            }
        }
        header('Location:../register_success.php');
    }

}

?>