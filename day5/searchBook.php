<?php

$bookno=$_POST["bookno"];
$sql="SELECT * FROM books WHERE bookno='$bookno'";
$cn=mysqli_connect("localhost","root","","library");
$result=mysqli_query($cn,$sql);
$count=mysqli_num_rows($result);
if($count==0)
{
    echo "sorry";

}
else{
    $row=mysqli_fetch_array($result);
    echo "$row[1],$row[2],$row[3]";
}
mysqli_close($cn);
?>