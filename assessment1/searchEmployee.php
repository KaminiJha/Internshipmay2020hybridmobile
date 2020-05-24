<?php

$empid=$_POST["empid"];
$sql="SELECT * FROM employee WHERE Empid='$empid'";
$cn=mysqli_connect("localhost","root","","demodb");
$result=mysqli_query($cn,$sql);
$count=mysqli_num_rows($result);
if($count==0)
{
    echo "sorry";

}
else{
    $row=mysqli_fetch_array($result);
    $obj=(object)[];
    $obj->name=$row["Name"];
    $obj->designation=$row["Designation"];
    $obj->salary=$row["Salary"];
    $data=json_encode($obj);
    echo $data;
    // echo "$row[1],$row[2],$row[3]";
}
mysqli_close($cn);
?>