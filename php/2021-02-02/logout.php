<?php  
require 'core.inc.php';

//echo $_SERVER['HTTP_REFERER'];
session_destroy();
header('Location: log.php');

?>