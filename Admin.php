<?php

include 'init.php';
include 'head.php';

 ?>

 <div class="jumbotron">
 <h3 style="text-align:center;margin-top:-5px;">SRM Lab Management - Faculty Of Engineering And Technology</h3>

 </div>


<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
</style>
</head>
<body>
<h1>Login<h1>
<form action='Admin.php' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='email'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='password'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>

</form>
<?php
session_start();
if(isset($_POST['submit']))
{

 mysql_select_db('LABS') or die(mysql_error());
 $email=(isset($_POST['email']));
 $password=(isset($_POST['password']));
 if($email!=''&&$password!='')
 {
   $query=mysql_query("select * from user_info where email='$email' and password='$password'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['name']=$name;
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
</body>
