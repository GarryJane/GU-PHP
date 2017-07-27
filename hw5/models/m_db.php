<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASSWORD', 'MoodvinAs77');
define('DB_NAME', 'shop');

$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME)
or die("<br><br><b>Error connecting to Asterisk DB<b> " . "ошибка:" . mysqli_error($link));
if (!mysqli_set_charset($link, "utf8")) {
    printf("<br><br><b>Error connecting to Asterisk DB</b> " . mysqli_error($link));
}