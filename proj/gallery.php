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

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array('cache' => 'tmp/compilation_cache'));

$template = $twig->load('gallery.tmpl');
echo     $template->render( array("imgs" => $imgArr) );

