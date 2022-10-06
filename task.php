<?php
$row=0;
$col=0;
    
$cars = array("RIGHT","DOWN","LEFT","LEFT","DOWN");
$n = 4;
foreach($cars as $car) {

  if($car=="RIGHT") {
    if($col<$n-1)$col=$col+1;
  }
  else if($car=="LEFT") {
    if($col>0)$col=$col-1;
  }
  else if($car=="UP") {
    if($row>0)$row=$row-1;
  }
  else {
    if($row<$n-1) $row=$row+1;
  }

}
echo ($row*$n)+$col;
?>
