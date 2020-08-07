<?php declare(strict_types=1); // strict requirement
#To declare a type for the function return, add a colon ( : ) and the type right before the opening curly
# ( { )bracket when declaring the function.
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);
?>