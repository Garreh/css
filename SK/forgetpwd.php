<!doctype html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <?php include('Others/header.php'); ?>
    <meta charset="utf-8">
    <title>Forgot Password</title>

  </head>
  <body>
      <br><br><br><br>
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
    <label for="inputEmail" class="col-sm-2 col-form-label">Registered Email</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="inputEmail" placeholder="Enter your registered email here">
      <br>
      <small class="form-text text-mutedw">
      <a href="#">Forgot your password?</a>
      </small>
    </div>
  </div>
  <br>
  <div class="form-group row justify-content-center">
    <div class="col-sm-7 text-center">
      <button type="submit" class="button">Submit</button>
    </div>
  </div>
  </form>


  </body>
</html>
