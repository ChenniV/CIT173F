<!DOCTYPE html>
<html>
<title>Array Act 1</title>
<body>

<?php
$array = array(25,12,43);
$count = array_count_values($array);

echo "The frequency of all elements of an ";
print_r($count);
?>
</body>
</html>
