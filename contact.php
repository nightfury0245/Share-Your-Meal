<?php
  //  echo 'hello';
 $name = $_POST['loc'];
 $phno = $_POST['phno'];
 $con = mysqli_connect("localhost","root","","WNF");
 //$db = mysqli_connect_db("localhost","root","WNF");
/* if($con){
     echo "success";
 }
 else{
     echo "failed";
 }  */
    $q = mysqli_query($con,"INSERT INTO `location`(`loc`,`phno`) VALUES('$name','$phno')");
  /*  if($q){
        echo "success";
    }
    else{
        echo "failed";
    }*/
?>