<?php

session_start();

define("M","./model/");
define("V","./views/");
define("C","./controller/");
define("JS",V."assets/js/");
define("IMG",V."assets/img/");

include(M."config.php");
include(C."router.php");

include(V."allpage.php");
