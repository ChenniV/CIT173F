<!DOCTYPE html>
<html>
<body>

<?php
$element = array(1,1,5,6,6,2,7,7,0);
$arrlength = count($element);
$x = 0; 
$y = 1; 
$z = 0; 
$temp = 0;

sort($element);

while($z < $arrlength){
if ($element[$x] == $element[$y]){
    $temp++;
    $x++;
    $y++;
    $z++;
    
}
else if($element[$x] != $element[$y]){
    $x++;
    $y++;
    $z++;

}
}
echo "Total number of duplicate elements found in the array is : " . $temp;
?>  

</body>
</html>


