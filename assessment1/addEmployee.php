<?php

$data=$_POST['data'];
$decode=json_decode($data);

$empid=$decode->empid;
$name=$decode->name;
$designation=$decode->designation;
$salary=$decode->salary;

$cn=mysqli_connect("localhost","root","","demodb");
$sql="INSERT INTO employee VALUES ('$empid','$name','$designation','$salary') ";
mysqli_query($cn,$sql);
mysqli_close($cn);
echo("done");
?>