<?php
include 'init.php';
$email=$_POST['email'];
$password=$_POST['password'];
$email=mysql_real_escape_string($email);
$password=mysql_real_escape_string($password);
$password=md5($password);

if(isset($_POST['submit']))
{
   if($email!='' && $password!='')
     {
       mysql_select_db('LABS') or die(mysql_error());
       $sql="SELECT *FROM user WHERE email='$email' AND password='$password'";
    $query=mysql_query($sql) or die(mysql_error());
    $res=mysql_fetch_row($query);
    $count=mysql_num_rows($query);
    if($count>0)
    {

     header('location:DashBoard.php');
    }
    else
    {
     echo'You entered username or password is incorrect';
    }
  }
  else
  {
   echo'Enter both username and password';
  }
}
?>
