<?php

session_start();

function dd($vars)
{
    echo '<pre>';

    var_dump($vars);

    echo '</pre>';
    die;
}

function dump($vars)
{
    echo '<pre>';

    var_dump($vars);

    echo '</pre>';
}

function includeTemplate($template, $data = [])
{
    extract($data);
    include $_SERVER['DOCUMENT_ROOT'] . '/layout/' . ltrim($template, '/');
}


require_once __DIR__ . '/catalog.php';
