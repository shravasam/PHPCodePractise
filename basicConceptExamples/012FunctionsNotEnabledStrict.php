<?php
#PHP is a Loosely Typed Language. In PHP 7, type declarations were added.
#and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>
