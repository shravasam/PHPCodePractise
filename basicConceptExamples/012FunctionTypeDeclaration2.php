<?php declare(strict_types=1); // strict requirement
/*
    You can specify a different return type, than the argument types, 
    but make sure the return is the correct type:
*/
function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);
?>
