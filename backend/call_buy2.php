<?php
include("conf/mariadb.php");
$sql="SELECT * FROM `buy_detail` 
LEFT JOIN `product` ON `buy_detail`.`product_id`=`product`.`product_id`
WHERE `buy_id`='".$_POST["buy_id"]."'";

$que=mysqli_query($con,$sql);
while($re=mysqli_fetch_assoc($que)){

   $array[]=$re;
}
echo json_encode($array,JSON_UNESCAPED_UNICODE); 

//echo $_POST["pro_id"];

?> 