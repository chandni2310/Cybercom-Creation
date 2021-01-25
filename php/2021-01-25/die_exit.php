<?php 
//die() an exit() are used to end or kill the execution of program/code

echo 'HEllo ';
@mysqli_connect('localhost','root',' ') || die('not connected');
//die('Not connected');
//exit('Not connected');
echo 'connected to database';


echo 'world';


?>