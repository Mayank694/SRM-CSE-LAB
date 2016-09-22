<?php
include 'head.php';
include 'helpers.php';
include 'js/main.js';
 ?>

<style media="screen">
.footer {
position:relative;;
margin-top: 450px; /* negative value of footer height */
text-align: center;
clear:both;
padding-top:20px;
}

.sign{
  width: auto;
  height: 10px;


  padding-top: -100px;
  padding-left:  1000px;
}

.number{
  width: inherit;
  border-style: groove;
  border-radius: 5px;

}
</style>
<div class="jumbotron" style="height:30px;">
<div class="sign">
          <a href="index.php">sign out( mayank_bansal@srmuniv.edu.in)</a>
</div>
         <h3 style="text-align:left;margin-top:-10px;">SRM Lab Management - Faculty Of Engineering And Technology</h3>
          <h3 id="h31">LAB Status</h3>
<div id="date">
    <?php echo  date("Y/m/d"). "<br>";?>
</div>
</div>
<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <hr>
      <table border="0" align="left" cellpadding="1" cellspacing="1">
  <tbody>
        <tr><td>Programmer Name</td><td><strong>Karthikeyan</strong></td></tr>
        <tr><td>LAB NAME</td><td><strong>OS LAB</strong></td></tr>
        <tr><td>Floor</td><td><strong>6</strong></td></tr>
        <tr><td>Department:</td><td><strong>Computer Science and Engineering</strong></td></tr>
        <tr><td>Semester:</td><td><strong>5</strong></td>
	</tbody>
</table>

    </div>
    <div class="col-md-6">
      <form  action="index.html" method="post">
          <label for="selectdate">Select Date</label>
          <div class='input-group date' id='datetimepicker1'>
                <input type='date' class="form-control" name="selectdate"/>
                  <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                  </span>
          </div>
           <label for="selectlab">Select Lab</label>
      <select class="form-control" name="selectlab">
          <option value="option">option</option>
          <option value="option">option</option>
          <option value="option">option</option>
          <option value="option">option</option>
      </select>
            <label for="selectlab">Lab attendant</label>
      <select class="form-control" name="attendant">
          <option value="option">option</option>
          <option value="option">option</option>
          <option value="option">option</option>
          <option value="option">option</option>
      </select>
            <label for="selectlab">System Working</label><br>
      <input type="number" class="number" name="totalsystemworking" ><br>
            <label for="selectlab">System Not Working</label><br>
      <input type="number" class="number" name="totalsystemnot" ><br>
             <label for="selectlab">Total System</label><br>
      <input type="number" class="number" name="totalsystem" ><br>
             <label for="selectlab">Software Issue</label><br>
      <select class="form-control" name="selectissue" value="null">
          <option value="option">Yes</option>
          <option value="option">no</option>
      </select>
             <label for="">Leave from</label>
        <div class='input-group date' id='datetimepicker2'>
            <input type='date' class="form-control" value="null" name="leavefrom" />
              <span class="input-group-addon">
                         <span class="glyphicon glyphicon-calendar"></span>
              </span>
        </div>
             <label for="">Leave To</label>
        <div class='input-group date' id='datetimepicker3'>
              <input type='date' class="form-control" value="null"  name="leaveto"/>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
        </div>
        <input type="submit" style="margin-top:10px;" class="btn btn-primary" name="submit" value="Update">
      </form>

    </div>
    <hr>
    <div class="col-md-3">
    </div>
</div>

</div>
 <footer class="footer" >&copy; SRM University Lab Management | All Right Reserved </footer>
