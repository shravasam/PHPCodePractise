<!DOCTYPE html>
<html>
<body>

<?php
/*
In the example above, / is the delimiter, w3schools is the pattern that is being searched for, and i is a modifier that makes the search case-insensitive.
*/
/*
The preg_replace() function will replace all of the matches of the pattern in a string with another string.
*/
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);
?>

</body>
</html>