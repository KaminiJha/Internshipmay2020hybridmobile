<?php
$rollno=$_POST["rollno"];
$name=$_POST["name"];
$course=$_POST["course"];

$sql="INSERT INTO student VALUES ('$rollno','$name','$course')";
//echo $sql
$cn=mysqli_connect("localhost","root","","abes") or die("unable to insert records");
mysqli_query($cn,$sql);
mysqli_close($cn);
echo "done";
?>