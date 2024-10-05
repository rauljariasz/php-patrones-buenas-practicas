<?php

#Metodo para hacer 'Destructuring assignment' de un array simple*/
#Destructuring
$arr = [1, 5, "ar"];
[$a, $b, $c] = $arr;
echo $a; //1
echo $b; //5
echo $c; //ar
echo "\n";

#Destructuring - list() de array simple
$info = array('coffee', 'brown', 'caffeine');
list($drink, $color, $power) = $info;

/////////////////////////////////////////
#way to destructure objects or associative arrays in PHP

#Destructuring - extract()
const JSONserializado = '{ "name": "Pablo",  "age": 12}';
#$json_des_serializado= json_decode(JSONserializado); //pero NO ES UN ARRAY es un OBJETO stdClass, por tanto:
$arrayAsociativo = json_decode(JSONserializado, true); //como ARRAY //array(2) { ["name"]=> string(5) "Pablo" ["age"]=> int(12) }
extract($arrayAsociativo);
var_dump($name); // string(5) "Pablo"
var_dump($age); // int(12)

#Destructuring - list()
$test_arr = ['a' => 9, 'b' => 'dc'];
list('a' => $a, 'b' => $b) = $test_arr;
var_dump($a); //int(9)
var_dump($b); // string(2) "dc