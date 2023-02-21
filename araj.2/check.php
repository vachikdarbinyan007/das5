<?php
$selectvalue=$_POST["selectvalue"];
$from=$_POST["from"];
$to=$_POST["to"];
$result="";
$con=mysqli_connect("localhost","root","","mysql_db1");
$sql="SELECT * FROM products WHERE $selectvalue BETWEEN $from AND $to";
$ardyunq=mysqli_query($con,$sql);

while($togh=mysqli_fetch_assoc($ardyunq)){
    $result.="<th>Name</th><th>Quantity</th><th>Price</th><tr><td>".$togh['name']."</td><td>".$togh['qty']."</td><td>".$togh['price']."</td></tr>";
};
echo $result;
?>