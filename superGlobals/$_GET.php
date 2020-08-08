<?php
/* PLEASE READ BELOW
PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".
When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to "test_get.php", 
and you can then access their values in "test_get.php" with $_GET.
*/
?>
<!DOCTYPE html>
<html>
<body>

<a href="test_get.php?subject=home/docus">Test $GET</a>
<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>
</body>
</html>
