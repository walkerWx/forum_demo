<?php
/**
 * Created by PhpStorm.
 * User: xiewang
 * Date: 2017/7/6
 * Time: 14:54
 */

$error = filter_input(INPUT_GET, 'err', FILTER_SANITIZE_STRING);

if (!$error) {
    $error = 'An unknown error happened.';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <link rel="stylesheet" href="resources/css/main.css" />
</head>
<body>
<h1>An error occurred</h1>
<p class="error"><?php echo $error ?></p>
</body>
</html>
