<!doctype html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include('Others/header.php'); ?>
    <meta charset="utf-8">
    <title>Login</title>

  </head>
  <body>
    <br><br><br><br>
    <!-- <div class="row-fluid">
      <div class="col-4">
        <a href="adminmenu.php" class="backbtn">
          <i class="fas fa-angle-left" style="color:#274395;"></i> BACK
        </a>
      </div>
    </div> -->
    <center>
      <img src="Others/sklogo.png"  class="rounded mx-auto d-block" alt="sklogo" width= 252px height= 233px;>
      <img src="sklogo.png" alt="" width= 252px height= 233px;>
    <h1>SK MANAGEMENT SHIPPING SYSTEM</h1>
  <br>
</center>

<form name="form" method="post" id="" class="form-horizontal container pt-5">
  <div class="form-group row justify-content-center">
    <label for="inputID" class="col-sm-2 col-form-label">Login ID</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputID" placeholder="Enter your login id here">
    </div>
  </div>
  <div class="form-group row justify-content-center">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" id="inputPassword" placeholder="Enter your password here">
      <br>
      <small id="passwordHelpBlock" class="form-text text-mutedw">
      <a href="#">Forgot your password?</a>
      </small>
    </div>
  </div>
  <br>
  <div class="form-group row justify-content-center">
    <div class="col-sm-7 text-center">
      <button type="submit" class="button">Login</button>
    </div>
  </div>
</form>
  </body>
</html>
