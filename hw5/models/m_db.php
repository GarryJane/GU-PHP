<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASSWORD', 'MoodvinAs77');
define('DB_NAME', 'shop');

$db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if ($db->connect_errno) {
    echo "Неудалось подключиться: " . $db->connect_error . "\n";
}
