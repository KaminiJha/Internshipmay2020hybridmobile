<?php
$data=$_POST['data'];
$s=json_decode($data);


$bookno=$s->bookno;
$title=$s->title;
$author=$s->author;
$price=$s->price;


$sql="INSERT INTO books VALUES ('$bookno','$title','$author','$price')";
$cn=mysqli_connect("localhost","root","","library") or die("unable to insert records");
mysqli_query($cn,$sql);
mysqli_close($cn);
echo "done";

?>