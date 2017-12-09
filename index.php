
<?php
include 'init.php';
include 'head.php';
?>
<link rel="stylesheet" href="css/main.css">
</head>
<style media="screen">

body{
  margin: 0 auto;
  background-color:rgb(24,58,104);
  width: 100% 720px;
  }
</style>
  <body >
<div class="jumbotron">
<h3 style="text-align:center;margin-top:-5px;">SRM Lab Management by ujj- Faculty Of Engineering And Technology</h3>
</div>
</div>
      <div class="ontainer">
      <img src="Srmseal.png" alt="User" />
      <div >

      <form  action="verify.php" method="post">
            <label for="login" id="label"><strong>Login</strong></label>
              <div class="form-input">
                   <input type="email" id="email" name="email" placeholder="Enter email">
             </div>
          <div class="form">
              <input  type="password" id='password' name="password" placeholder="Enter Password">
         </div>
              <input  type="submit" id="submit" name="submit"  class="btn btn-success">
       </form>
              <a href="signup.php" style="padding-bottom:5px;padding-left:150px;">Register Here</a>
              <a href="Admin.php" style="padding-left:150px;">Login as Admin</a>
      </div>






<footer class="footer" style="margin-top:50px;color:black;">&copy; SRM University Lab Management | All Right Reserved </footer>
</body>

</html>
