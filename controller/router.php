<?php

$get = explode("/", $_SERVER["REQUEST_URI"]);
// $page = $get[2] != "" ? $get[2] : "404";
$page = (isset($_GET['page'])) ? $_GET['page'] : 'home';
$view = V . "page." . $page . ".php";

if (file_exists($view)) {
  $content = $view; // usage
} else {
  $page = "404";
  $content = V . "page.404.php"; // send 404
}
