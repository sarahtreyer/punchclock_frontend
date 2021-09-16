<?php

$url = $_GET['a'];

if($url === 'testing') {
    $content = file_get_contents('view/index.html');
    echo $content;
}