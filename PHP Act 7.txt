<!DOCTYPE html>
<html>
<body>

<?php 
for ($x = 1; $x <= 10; $x++) {
	echo '<br>' ;
	for ($y = 1; $y <= 10; $y++){
    $z = $x * $y;
    echo $z . "\t";
    }
}
?>  

</body>
</html>