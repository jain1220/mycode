<!--  <!DOCTYPE html>
<html>
<head>
	<title>php tutorial</title>
</head>
<body>

<?php

define("pi",3.14);
php start 
for printins 
echo "hello divya";

$a = 123;
$b = 457.2;
$str1 = "hey babe\n";
Echo $str1;
echo $a + $b;
echo "<br>";
var_dump($a);
var_dump($b);

$x = true;
$y = false;
echo "<br>";
// echo $x;
echo $x;
var_dump($x);

$fruits= array('apple', 'orange', 'graphes');
var_dump($fruits);

$str1 = "my name is jenny";
echo strlen($str1),"<br>";
echo str_word_count($str1), ",<br>";
echo strrev($str1), "<br>";
echo strpos($str1, 'jenny'), "<br>";
echo str_replace('is', 'are', $str1);

echo "the value of 3+4 is", 3+4, "<br>";
echo "the value of 3-4 is", 3-4, "<br>";
echo "the value of 3*4 is", 3*4, "<br>";
echo "the value of 3/4 is", 3/4, "<br>";
echo "the value of 3**4 is", 3**4, "<br>";

$t = date("h");
if ($t <"8")
{
	echo $t . "is a good time";
}
else if ($t==8)
{
	echo "time is 10";
}
else
{
	echo "bad luck";
}	

echo date_default_timezone_get();

$var1 = 2;

while ($var1 <= 4) {

	echo "the current value of the variable is ". $var1;
	$var1 ++;
}

function average_numbers($num1, $num2)
{
	$average = ($num1 + $num2)/2;
	return $average;
}

echo average_numbers(2,2);

?>

</body>
</html>

 -->