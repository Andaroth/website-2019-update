<?php

$get = explode("/", $_SERVER["REQUEST_URI"]);
// $page = $get[2] != "" ? $get[2] : "404";
function getter() {
  switch(true) {
    case (isset($_GET['page'])): return $_GET['page']; break; // legacy
    case (isset($_GET['about'])): return 'about'; break;
    case (isset($_GET['portfolio'])): return 'portfolio'; break;
    default: return 'home'; break;
  }
}
$page = (!$_GET) ? 'home' : getter();// (isset($_GET['page'])) ? $_GET['page'] : (isset($_GET['about'])) ? 'about' : (isset($_GET['portfolio'])) ? 'portfolio' : 'home';
$view = V . "page." . $page . ".php";

if (file_exists($view)) {
  $content = $view; // usage
} else {
  $page = "404";
  $content = V . "page.404.php"; // send 404
}
