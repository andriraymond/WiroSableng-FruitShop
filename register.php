<?php 
include_once("vendor/autoload.php"); 
 
$loader = new Twig_Loader_Filesystem("template");
 $twig = new Twig_Environment($loader); 
 $template = $twig->load('register.html'); 
 
echo $template->render();