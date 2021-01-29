<?php 

$file_name = 'movies.txt';
//opens the file.txt file or implicitly creates the file
$myfile = fopen($file_name, 'w') or die('Cannot open file: '.$file_name); 
$movie_name = "The Man from Earth \n";
// write name to the file
fwrite($myfile, $movie_name);

// lets write another movie name to our file
$movie_name = "SouthPaw \n";
fwrite($myfile, $movie_name);
// close the file
fclose($myfile);



 ?>