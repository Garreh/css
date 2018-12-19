<!doctype html>
<html>
<head>
  <title>Account Settings</title>

  <script> 
    $(function(){
    $("#header").load("header.html"); 
    $("#footer").load("footer.html"); 
  });
</script>

</head>

<body>

<!-- Navigation bar -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="#"><img src="sklogo.png" width="30" height="30"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Import</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Export</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Accounting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Management</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sales</a>
      </li>
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-crown" style="color: orange;"></i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Logged in as Kasai Kazuki
        </a>
        <div class="dropdown-menu shadow-lg bg-white" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Manage Account</a>
          <a class="dropdown-item" href="#">Manage Employee Accounts</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sign Out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid title">
  <div class="row">
    <div class="col-xl">
      Account Settings
    </div>
  </div>
</div>

<br/>

<div class="container-fluid title2">
  <div class="row">
    <div class="col-lg">
      Security and Login
    </div>
  </div>
</div>

<br/>

<div class="container-fluid title3">
  <div class="row">
    <div class="col-xl">
      Change your account email and password here.
    </div>
  </div>
</div>

<br/><br/>

<div class="container">
  <div id="accordion">
    <div class="card">
      <div class="card-header bg-white">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Change Account Password
          <i class="fas fa-caret-down" style="float: right; font-size:18px;"></i>
        </a>
      </div>
      <div id="collapseOne" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <form>
            <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Old Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Enter your old password here">
              </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">New Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Enter your new password here">
                  <small id="passwordHelpBlock" class="form-text text-muted">
                  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                  </small>
              </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Confirm your new password here">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-12 text-center">
                <button type="submit" class="button">Change Password</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <br/>

    <div class="card">
      <div class="card-header bg-white" style="display: inline-block;">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Change Account Email
        <i class="fas fa-caret-down" style="float: right; font-size:18px;"></i>
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <form>
            <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Old Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Enter your old email here">
              </div>
            </div>
            <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">New Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Enter your new email here">
              </div>
            </div>
            <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Confirm Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Confirm your new email here">
                <small id="passwordHelpBlock" class="form-text text-muted">
                  You will be sent a confirmation email to confirm the change.
                  </small>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-12 text-center">
                <button type="submit" class="button">Change Email</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
