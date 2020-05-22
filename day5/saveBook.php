<?php

$bookno=$_POST['bookno'];
$title=$_POST['title'];
$author=$_POST['author'];
$price=$_POST['price'];


$sql="INSERT INTO books VALUES ('$bookno','$title','$author','$price')";
$cn=mysqli_connect("localhost","root","","library") or die("unable to insert records");
mysqli_query($cn,$sql);
mysqli_close($cn);
echo "done";

?>