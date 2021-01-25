<?php 
//str_word_count returns number of words in given string.It has 3 arguments
$string='This is a string function example.';
//0 returns int value
//1 returnss array
//2 will return an associative array with key as starting index of word
$count=str_word_count($string,2,'.');//to include .
print_r($count);
echo '<br>' ;
//echo $count;


//str_shuffle is used to randomly shuffle words present in string
//$string1='This is example of stringg shuffle';
$string1='abcdefghijklmnopqrstuvwxyz0123456789';
$shuffle=str_shuffle($string1);
$half=substr($shuffle,0,5);
echo $half.'<br>';


//strrev() to reverse the sstring
$string2='Hello how are you?';
$rev=strrev($string2);
echo $rev;
echo '<br>';


//similar_text() it return the similarity percentage between any two given strings
$str1='Hello  my name is Chandni, how are you?';
$str2='Hello how are you?';
$result=similar_text($str1, $str2);
echo 'The smilarity % is '.$result.'<br>';


//strlen() is used to find length of string
$str3='This is function to find length of string';
echo strlen($str3);
echo '<br>';


//trim() it removes whitespaces or anyy extra character from given string
$str4="\n \n \n Hello world \n \n \n";
echo 'Without trim '.$str4;
echo '<br>';
$aft_trim=trim($str4);
echo 'With trim '.$aft_trim;
echo '<br>';
$str5 = "Hello World!";
echo $str5 . "<br>";
echo trim($str5,"Hed!");//removes he from  hello and d from world

//addslashes() it add \ infront of eveery predefined character 
echo '<br>';
$str = "Who's your best friend?";
echo $str . " This is not safe in a database query.<br>";
echo addslashes($str) . " This is safe in a database query.<br>";


//strpos() to find position/index of a specific text
$str6='I am fine';
echo strpos($str6,'fine');
echo '<br>';



?>