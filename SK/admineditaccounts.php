<!doctype html>
<html>
<head>
<title>Adding Accounts</title>

  <?php include('Others/header.php'); ?>

</head>

<body>

  <?php include('Others/navbar.php'); ?>

<div class="container-fluid title">
  <div class="row-fluid">
    <div class="col-xl">
      Editing Accounts
    </div>
  </div>
</div>

<br/>

<div class="row-fluid">
  <div class="col-4">
    <a href="adminpanel.php" class="backbtn">
      <i class="fas fa-angle-left" style="color:#274395;"></i> BACK
    </a>
  </div>
</div>

<center>
<div class="container-fluid title3" style="text-indent: 0px">
  <div class="row-fluid">
    <div class="col-7">
      Edit an employee credential here. The new information will apply to all newly created and edited data, but not previous ones.
    </div>
  </div>
</div>
</center>

<br/><br/>

<form name="form" method="post" id="" class="form-horizontal container">
  <div class="form-group row justify-content-center">
    <label for="inputID" class="col-sm-2 col-form-label">Login ID</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputID">
    </div>
  </div>

  <div class="form-group row justify-content-center">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="inputEmail">
    </div>
  </div>

  <div class="form-group row justify-content-center">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName">
    </div>
  </div>

  <div class="form-group row justify-content-center">
    <label for="inputGroup" class="col-sm-2 col-form-label">Group</label>
    <div class="col-sm-4">
      <select class="form-control" id="inputGroup">
        <option disabled selected>Select a Group</option>
        <option>Group A</option>
        <option>Group B</option>
      </select>
      <small id="passwordHelpBlock" class="form-text text-muted">
      Note: An employee can only see the details of the group that they are assigned to.
      </small>
    </div>
  </div>

  <br/>

  <div class="form-group row justify-content-center">
    <div class="col-sm-7 text-center">
      <button type="submit" class="button">Confirm Changes</button>
    </div>
  </div>
</form>

</body>
</html>
