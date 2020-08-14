<!DOCTYPE html>
<html>
<body>

<?php
/*
In the example above, / is the delimiter, w3schools is the pattern that is being searched for, and i is a modifier that makes the search case-insensitive.
*/
/*
The preg_match_all() function will tell you how many matches were found for a pattern in a string.
*/
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
?>

</body>
</html>