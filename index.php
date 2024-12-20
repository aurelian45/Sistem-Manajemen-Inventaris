<?php
session_start();
require_once __DIR__ . "/loadAll.php";
date_default_timezone_set('Asia/Makassar');
$layout = 'dashboard';
$title = 'Dashboard';
function set_layout($name = 'dashboard',)
{
    global $layout;
    $layout = $name;
}
function set_title($page_title = 'Dashboard')
{
    global $title;
    $title = $page_title;
}

$content = renderPage(getUrl());


$layoutFile = __DIR__ . "/layouts/{$layout}.php";

if (file_exists($layoutFile)) {
    include $layoutFile;
} else {
    echo "Layout Tidak Ditemukan di {$layoutFile}";
}
