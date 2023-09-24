<?php
include('init.php');
include('modules/_head.php');
$routes = array("index", "soy", "reino", "ping", "blog");
$content = isset($_GET["page"]) ? $_GET["page"] : 'index';
$folderContent = "content/";
$routeFinal = in_array($content, $routes) ? $content : 'error404';
$routeInclude = $folderContent . $routeFinal . ".php";
include($routeInclude);
include('modules/_foot.php');
