<?php
/*
        To turn a function argument into a reference, the & operator is used
*/

function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>