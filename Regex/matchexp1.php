<!DOCTYPE html>
<html>
<body>

<?php
/*
In the example above, / is the delimiter, w3schools is the pattern that is being searched for, and i is a modifier that makes the search case-insensitive.
*/
/*
The preg_match() function will tell you whether a string contains matches of a pattern.
*/

$str = "Hello world";
$pattern = "/world/i";
echo preg_match($pattern, $str); 
?>

</body>
</html>
