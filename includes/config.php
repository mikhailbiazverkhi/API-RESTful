<?php

//local
$db_user = 'root';
$db_password = '$Mike1q2w3e4R';
$db_name = 'tp2_blog_db';
$conn = new PDO('mysql:host=localhost; dbname=' . $db_name . ';charset=utf8', $db_user, $db_password);

//Remote MySQL Server db4free.net (for tests)
// $db_user = 'root_cegep';
// $db_password = 'FWt4#2cs6t';
// $db_name = 'tp2_blog_db';
// $conn = new PDO('mysql:host=db4free.net; dbname=' . $db_name . ';charset=utf8', $db_user, $db_password);

$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$conn->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// define('APP_NAME', 'API RESTful de la plateforme du Blog');
