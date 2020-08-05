<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
?> 
 <?php
$txt = "hello php";
echo "I love $txt!";
?> 

<?php
$txt = "hello php";
echo "I love " . $txt . "!";
?> 
 <?php
$x = 5;
$y = 4;
echo $x + $y;
?> 
 <?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?> 
