<?php
function calculatePerimeter($length,$width){
    return 2*($length*$width);
}
$recpe=calculatePerimeter(10,8);
echo "Perimeter of rectangle is $recpe";
?>