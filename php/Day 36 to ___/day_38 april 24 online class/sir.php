<?php


$name = '     ahaMd a php language      ';

echo $name;

echo "<hr>";

echo strlen($name);
echo "<hr>";
echo str_word_count($name);
echo "<hr>";

echo strrev($name);

echo "<hr>";

echo str_replace("language","modern",$name);
echo "<hr>";

echo strtolower($name);
echo "<hr>";
echo strtoupper($name);
echo "<hr>";
echo ucfirst($name);

echo "<hr>";
echo ucwords($name);

echo "<hr>";

echo trim($name);
echo "<hr>";
echo str_repeat("php",10);




?>