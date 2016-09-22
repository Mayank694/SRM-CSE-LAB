<?php

include_once 'init.php';

$name=$_POST['name'];
$EmpId=$_POST['EmpId'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);
$mobile=$_POST['mobile'];
$Lab=$_POST['Lab'];
$floor=$_POST['floor'];


if(empty($name) ||empty($EmpId) || empty($email) || empty($password)||

empty($repassword)||empty($mobile) ||empty($Lab) || empty($floor)){

    header("Location:signup.php");
  }

else
{
$sq=mysql_select_db("LABS",$con);
if(!$sq){
  echo "could not connect";
}

  $sql="INSERT INTO user (name,EmpId,email,password,repassword,mobile,Lab,Floor)
   VALUES('$name','$EmpId','$email','$password','$repassword','$mobile','$Lab','$floor')";
$squery=mysql_query($sql);

header("Location:confirmation.php");

}
