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
    $obj=(object)[];
    $obj->title=$row["title"];
    $obj->author=$row["author"];
    $obj->price=$row["price"];
    $data=json_encode($obj);
    echo $data;
    // echo "$row[1],$row[2],$row[3]";
}
mysqli_close($cn);
?>