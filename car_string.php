<!-- <?php
$car="BMW";
$model="X6";
echo "$car $model";
?>

<?php
$car="Scorpio ";
$price="17 Lakh";
$Info="<br>".$car." ".$price;
echo $Info;
?> -->
<?php
$str=" rolls royce";
$pos=strpos($str,"royce");
echo "Position of str is:".$pos;

?>

<?php
$str1="Rolls rce";
$new_str=str_replace("rce","Royce",$str1);
echo $new_str;

$strlen=strlen($str);
echo "Length of str is:".$strlen;

echo"Upper:".strtoupper($str);
echo"lower:".strtolower($str);
echo"trim:".trim($str)
?>

