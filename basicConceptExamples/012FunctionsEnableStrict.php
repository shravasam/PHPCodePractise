<?php declare(strict_types=1); // strict requirement
#To specify strict we need to set declare(strict_types=1);
#The strict declaration forces things to be used in the intended way.

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>