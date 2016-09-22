<?php
include 'init.php';
include 'head.php';
?>
 <div class="jumbotron">
 <h3 style="text-align:center;margin-top:-5px;">SRM Lab Management - Faculty Of Engineering And Technology</h3>
 </div>
 <div class="container-fluid">
    <div class="row">
       <div class="col-md-2">
       </div>

<div class="col-md-8">
  <div class="row">
       <div class="panel panel-primary">
       <div class="panel-heading" style="text-align:center;">Programmer Registration  Form</div>
        <div class="panel-body">
          <form id ="myForm "action="register.php" method="POST">
       <div class="row">
      <div class="col-md-6">
         <label for="name">Name</label>
         <input type="text" id="name" name="name" class="form-control" require>
      </div>
      <div class="col-md-6">
          <label for="EmpId">Emp ID</label>
          <input type="text"  id="EmpId" name="EmpId" class="form-control" require >
      </div>
     </div>
     <div class="row">
      <div class="col-md-12">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" class="form-control" require>
      </div>
      <div class="col-md-12">
          <label for="password">Password</label>
          <input type="password"  id="password" name="password" class="form-control" require>
      </div>
      <div class="col-md-12">
          <label for="repassword">Renter Password</label>
          <input type="password"  id="repassword" name="repassword" class="form-control"require >
      </div>
      <div class="col-md-12">
          <label for="Mobile">Mobile</label>
          <input type="mobile"  id="mobile" name="mobile" class="form-control" >
      </div>
      <div class="col-md-12">
          <label for="address1">Lab Name</label>
          <input type="text"  id="Lab" name="Lab" class="form-control" required="require">
      </div>
      <div class="col-md-12">
          <label for="floor">Floor</label>
          <input type="number"  id="floor" name="floor" class="form-control" required="require" >
      </div>
<p><br></p>
<p><br></p>
<p><br></p>
           <input type="submit" name="sign_up button" id="signup_button" value="Sign Up" class="btn btn-success" style="float:right;margin-top:15px;margin-right:15px;" >
      </div>
       </div>
  </form>
</div>
</div>
  <div class="col-md-2">

  </div>
