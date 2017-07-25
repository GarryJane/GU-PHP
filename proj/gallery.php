<?php

require_once 'vendor/autoload.php';

$imgArr = [
    'img/gallery1.jpg',
    'img/gallery2.jpg',
    'img/gallery3.jpg',
    'img/gallery4.jpg'
];

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'tmp/compilation_cache',
));

$template = $twig->load('gallery.tmpl');
echo $template->render([
        "imgArr" => $imgArr,
        "test" => "test"
]);

