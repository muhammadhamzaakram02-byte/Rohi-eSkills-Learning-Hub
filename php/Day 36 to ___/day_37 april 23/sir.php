<?php
// day 37 april 23 sir file 

$name = ["ali","aleem","ahmad","akram"];

print_r($name);


echo $name[1];


$students = [
    "name"=>"ali",
    "fname"=> "akram",
    "age"=> 45


  ];


  print_r($students);


echo "<hr>";
  $employees = [
    ["aleen",45,45000,"lodhran"],
    ["akramn",67, 67000,"multan"],
    ["ahmad",56,56000,"bwp"]
  ];


print_r($employees);

echo "<hr>";

print_r($employees[1][3]);


echo "<hr>";


$new = ["akram", "ahmad",45,67];

// echo count($new);
 array_push($new ,"asad","farhan");

print_r($new);


echo "<hr>";

array_pop($new);

print_r($new);

echo "<hr>";
array_unshift($new,"umar","saleem");

print_r($new);
echo "<hr>";

array_shift($new);

print_r($new);
echo "<hr>";

$arr = array_merge($employees,$new);

print_r($arr);

echo "<hr>";


$number = [1,3,5,6,2,90];

print_r($number);
echo "<hr>";
sort($number);

print_r($number);

echo "<hr>";

rsort($number);
print_r($number);


echo "<hr>";

$stuName ="akrem,abraheem,ali";


$Name = explode(",",$stuName);


print_r($Name);


$Student = implode("-",$name);

print_r($Student);









  ?>