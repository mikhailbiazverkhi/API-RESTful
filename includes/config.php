<?php

$db_user = 'root';
$db_password = '$Mike1q2w3e4R';

$db_name = 'tp2_blog_db';

$db = new PDO('mysql:host=localhost; dbname=' . $db_name . ';charset=utf8', $db_user, $db_password);

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

define('APP_NAME', 'API RESTful de la plateforme du Blog');
