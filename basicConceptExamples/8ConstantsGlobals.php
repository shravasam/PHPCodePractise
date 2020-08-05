<?php
#Constants are automatically global and can be used across the entire script.
#This example uses a constant inside a function, even if it is defined outside the function:
define("GREETING", "Welcome to php training");

function myTest() {
  echo GREETING;
}
 
myTest();
?> 