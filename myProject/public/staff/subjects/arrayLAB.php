<?php

$cars = [
	["Volvo",22,18],
	["BMW",22,18],
	["Saab",22,18],
	["Land Rover",22,18]
];


echo $cars[0][2] . "</br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old." . "</br>";
$age['Peter'] = 26;
echo "Peter is " . $age['Peter'] . " years old." . "</br>";

?>
