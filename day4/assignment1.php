<?php
if(isset($_POST['name']) && isset($_POST['age']))
{
    $n=$_POST['name'];
    $a=$_POST['age'];
    if($a >=18)
    echo "Dear $n you are eligible for vote";
    else
    echo "Dear $n you are not eligible for voting";
}



?>