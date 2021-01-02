<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', 'root');
define('DB' , 'blog');

try {
    $db_connect = mysqli_connect(HOST, USERNAME, PASSWORD, DB);
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}