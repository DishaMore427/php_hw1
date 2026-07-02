

<?php
$car=["bmw","scorpio","Defender","Brezza"];
for ($i=0; $i <count($car) ; $i++) { 
    echo $car[$i];
}
?>

<?php
$carPrice=array("SUV Hyundai Creta"=>"10.90 Lakh",
"MUV Toyota"=>"19.72 Lakh",
"Brezza Mahindra"=>"16.41 Lakh",
"XUV700 Mahindra"=>"16 Lakh",
"Scorpio"=>"17 Lakh");
foreach($carPrice as $key=>$value){
    echo "$key $value";

}
?>

<?php
$arr1=array("bmw","porsche","ferari");
array_push($arr1,"defender","Creta");
print_r($arr1);
"<br>";

$remove=array_pop($arr1);
echo $remove;
"<br>";

$a1=array("bmw","porsche","ferari");
$a2=array("defender","Creta");
$arrm=array_merge($a1,$a2);
print_r($arrm);
"<br>";

$aslice=array_slice($arr1,1,2);
print_r($aslice);

$asso=array("XUV700"=>"Mahindra","MUV"=>"Toyota");
$keys=array_keys($asso);
print_r($keys);
?>



