<?php

$name = $_POST['name'];
$num = $_POST['phno'];
$coun = $_POST['con'];
$st = $_POST['st'];
$dis = $_POST['dis'];
$dnl = $_POST['dnl'];
$con = mysqli_connect("localhost","root","","WNF");
$q = mysqli_query($con,"INSERT INTO `volunteer`(`name`,`phno`,`con`,`st`,`dis`,`dnl`) VALUES('$name','$num','$coun','$st','$dis','$dnl')");
if($q){
    echo "success";
}
else{
    echo "failure";
}

?>