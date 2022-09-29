<!DOCTYPE html>
<html>
<body>

<?php
$city = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
$arrlength = count($city);

for($x = 0; $x < $arrlength; $x++) {
  echo $city[$x] . " , ";
  echo "<br>";
}
sort($city);

array_push($city, "Los Angeles", "Calcutta", "Osaka", "Beijing");
sort($city);
$arrlength = count($city);
echo "<br>";
for($x = 0; $x < $arrlength; $x++) {
  echo $city[$x] . " , ";
}

?>
</body>
</html>
