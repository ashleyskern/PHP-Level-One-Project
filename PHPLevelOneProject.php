<!DOCTYPE html>
<html>
<body>
<style>
body {
  background-color: pink;
  font-family: arial;
  text-align: center;
}
</style>
<b>MONTHLY SALES</b>
<br>
<br>
<?php

$clothes=array
  (
  array("<i>T-Shirts</i>",100,96),
  array("<i>Hoodies</i>",60,59),
  array("<i>Jeans</i>",110,67),
  array("<i>Accessories</i>",100,70)
  );

echo $clothes[0][0].": <b>Ordered</b>: ".$clothes[0][1].". Sold: ".$clothes[0][2]."<br>";
echo $clothes[1][0].": <b>Ordered</b>: ".$clothes[1][1].". Sold: ".$clothes[1][2]."<br>";
echo $clothes[2][0].": <b>Ordered</b>: ".$clothes[2][1].". Sold: ".$clothes[2][2]."<br>";
echo $clothes[3][0].": <b>Ordered</b>: ".$clothess[3][1].". Sold: ".$clothes[3][2]."<br>";
?>
<br>
<br>
<b>INVENTORY AND PRICE POINTS</b>
<br>
<br>
<?php
$someArray = array(
  10 => '$10',
);
foreach($someArray as $key => $val){
  echo "<i>T-Shirt</i>s: $key, <b>Value</b>: $val<br/>\n";
}
$someArray = array(
  20 => '$20',
);
foreach($someArray as $key => $val){
  echo "<i>Hoodies</i>: $key, <b>Value</b>: $val<br/>\n";
}
$someArray = array(
  40 => '$50',
);
foreach($someArray as $key => $val){
  echo "<i>Jeans</i>: $key, <b>Value</b>: $val<br/>\n";
}
$someArray = array(
  50 => '$5',
);
foreach($someArray as $key => $val){
  echo "<i>Accessories</i>: $key, <b>Value</b>: $val<br/>\n";
}
?>
<br>
<br>
<b><i><u>TOTAL REVENUE</u></i></b>
<br>
<br>
<?php
function multiply($a, $b, $c, $d){
  return $a * $b * $c * $d;
}

function stuff($arrayOne, $arrayTwo, $arrayThree, $arrayFour){
  $computed = array();
  for($index = 0; $index < count($arrayOne); $index++){
    array_push($computed, multiply($arrayOne[$index], $arrayTwo[$index], $arrayThree[$index], $arrayFour[$index]));
  }
  return array_sum($computed);
}

echo  "<td>$", $result_row['price'], "</td>";
echo stuff(
  array(10, 96),
  array(20, 59),
  array(50, 67),
  array(5, 70)

); #$26,614,160.00

?>


</body>
</html>
