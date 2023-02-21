<?php
$selectvalue=$_POST["selectvalue"];
$from=$_POST["from"];
$to=$_POST["to"];
$array=array();
$con=mysqli_connect("localhost","root","","mysql_db1");
$sql="SELECT * FROM cars WHERE $selectvalue BETWEEN $from AND $to";
$ardyunq=mysqli_query($con,$sql);

while($togh=mysqli_fetch_assoc($ardyunq)){
    array_push($array,$togh["name"],$togh["model"],$togh["price"],$togh["hp"],$togh["img"],$togh["speed"],$togh["transmission"],$togh["fuel"]);
};
echo json_encode($array);
?>