
<?php
#The following example will output the values of the given array ($colors):
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?> 

<?php
#The following example will output both the keys and the values of the given array ($age):
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?> 