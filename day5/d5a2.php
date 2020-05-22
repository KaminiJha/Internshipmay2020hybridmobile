<?php

$rollno=$_POST["rollno"];
$sql="SELECT * FROM student WHERE Rollno='$rollno'";
$cn=mysqli_connect("localhost","root","","abes");
$result=mysqli_query($cn,$sql);
$count=mysqli_num_rows($result);
if($count==0)
{
    echo "sorry";

}
else{
    $row=mysqli_fetch_array($result);
    echo "$row[1],$row[2]";
}
mysqli_close($cn);
?>