<?php

$submenu = "<a href=\"#1\"><strong>Quem somos</strong></a>";
$title = "Quem somos";
$content = file_get_contents('content/about.html');

include('template.php');

?>