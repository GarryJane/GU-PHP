<?php

require_once 'vendor/autoload.php';

// массив изображений галереи
$imgArr = [
    [
        'name' => "img1",
        'url' => 'img/gallery-1.jpg'
    ],
    [
        'name' => "img2",
        'url' => 'img/gallery-2.jpg'
    ],
    [
        'name' => "img3",
        'url' => 'img/gallery-3.jpg'
    ],
    [
        'name' => "img4",
        'url' => 'img/gallery-4.jpg'
    ]
];

/*
 * Вариант с хранением имён и адресов изображений в таблице mysql
 * **

define('DB_SERVER','127.0.0.1');
define('DB_USER','root');
define('DB_PASSWORD','MoodvinAs77');
define('DB_NAME','gallery');
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME)
or die("<br><br><b>Error connecting to Asterisk DB<b> " . "ошибка:" .  mysqli_error($link));
if(!mysqli_set_charset($link, "utf8")){
    printf("<br><br><b>Error connecting to Asterisk DB</b> " . mysqli_error($link));
}
$query = "select * from gallery.images";
$result = mysqli_query($link, $query);

if (!$result)
    die(mysqli_error($link));

$n = mysqli_num_rows($result);

$imagesFromDB = array();

for ($i = 0; $i < $n; $i++) {
    $row = mysqli_fetch_assoc($result);
    $imagesFromDB[] = $row;
}
*/

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array('cache' => 'tmp/compilation_cache'));

// Rendering by $GET['action'] value
switch ($_GET['action']) {
    case "showImg" :
        $template = $twig->load('single-img.tmpl');
        echo $template->render(array(
            "imgName" => $_GET['name'],
            "imgURL" => $_GET['url']
        ));
        break;
    default:
        $template = $twig->load('gallery.tmpl');
        // echo $template->render(array("imgs" => $imagesFromDB));
        echo $template->render(array("imgs" => $imgArr));
        break;
}
