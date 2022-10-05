<!DOCTYPE html>
<html>
<body>

<?php
$arr1 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$arrEven = array();
$arrOdd = array();
$temp = 0;
$arrlength = count($arr1);
$z = 0;

while($z < $arrlength){
if($arr1[$temp]%2 == 0){
    array_push($arrEven, $arr1[$temp]);
    $temp++;
    $z++;
}
else if($arr1[$temp]%2 != 0){
    array_push($arrOdd, $arr1[$temp]);
    $temp++;
    $z++;
}
}




$arrlength = count($arrEven);
for($x = 0; $x < $arrlength; $x++) {
  echo $arrEven[$x] . "  ";
}
echo "<br>";
$arrlength = count($arrOdd);
for($x = 0; $x < $arrlength; $x++) {
  echo $arrOdd[$x] . "  ";
}
?>  

</body>
</html>
