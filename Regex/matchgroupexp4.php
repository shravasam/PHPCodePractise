<!DOCTYPE html>
<html>
<body>

<?php
/*
Use grouping to search for the word "banana" by looking for ba followed by two instances of na:
*/
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str);
?>

</body>
</html>
