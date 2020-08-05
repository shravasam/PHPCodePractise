<?php
#Create a constant with a case-sensitive name:
define("GREETING", "Welcome to php training");
echo GREETING;
?> 

<?php
#Create a constant with a case-insensitive name:
define("GREETING", "Welcome to php training!", true);
echo greeting;
?> 