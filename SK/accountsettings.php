<!doctype html>
<html>
<head>
	<link rel = "stylesheet" href="main.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous">
  </script>

  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="main.js"></script>
  <style>
  .accordion {
    background-color: #fff;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 50%;
    border: 1px solid black;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    overflow-y: scroll;
    overflow: hidden;
}

  .active, .accordion:hover {
    background-color: #ccc;
}

  .panel {
    padding: 0px;
    max-height: 0px;
    background-color: #FFFFFF;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    width: 50%;
}
</style>
</head>

<body>

<!-- Navigation bar -->
<div class="navbar">
	<a href="mainmenu.html"><img src="logo.png" id="logo"></a>
	<a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  	<a href="mainmenu.html">Home</a>
  	<a href="importmenu.html">Import</a>
  	<a href="javascript:void(0)">Export</a>
  	<a href="javascript:void(0)">Accounting</a>
  	<a href="javascript:void(0)">Management</a>
  	<a href="javascript:void(0)">Sales</a>
    <a href="javascript:void(0)"><img src="admin.png" id="adminlogo"></a>
  	<div class="dropdown">
    	<button class="dropbtn">Logged in as Kasai Kazuki&nbsp;
        <i class="fas fa-caret-down"></i>
      </button>
    		<div class="dropdown-content">
      			<a href="accountsettings.html">Manage Account</a>
            <a href="adminmenu.html">Manage Employee Accounts</a>
      			<a href="javascript:void(0)">Sign Out</a>
    		</div>
  	</div>
</div>

<!-- Jump to top button -->
<button onclick="topFunction()" id="topbutton">
  <i class="fas fa-caret-up" style="color:#0000FF;"></i>
</button>

<!-- Title container -->
<div class="title">
  <a>Account Settings</a>
</div>

<br/><br/><br/><br/><br/>

<h1 class="title2">Security and Login</h1>

<p class="title3">Change your account email and password here.</p>

<br/><br/><br/>

<center>

<button class="accordion">Change Account Password
  <i class="fas fa-caret-down" style="float: right; font-size:18px;"></i>
</button>
<div class="panel">
  <br/>
  <form>
    <p>Old Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="password" class="inputsmalllong" placeholder="&nbsp;&nbsp;Enter your old password here">
    </p>
    <p>New Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="password" class="inputsmalllong" placeholder="&nbsp;&nbsp;Enter your new password here">
    </p>
    <p>Retype Password: &nbsp;
    <input type="password" class="inputsmalllong" placeholder="&nbsp;&nbsp;Retype your new password here">
    </p>
    <br/>
    <button class="button">Change Password</button>
  </form>
</div>

<br/><br/><br/>

<button class="accordion">Change Account Email
  <i class="fas fa-caret-down" style="float: right; font-size:18px;"></i>
</button>
<div class="panel">
  <br/>
  <form>
    <p>Old Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="email" class="inputsmalllong" placeholder="&nbsp;&nbsp;Enter your old email here">
    </p>
    <p>New Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="email" class="inputsmalllong" placeholder="&nbsp;&nbsp;Enter your new email here">
    </p>
    <p>Retype Email: &nbsp;
    <input type="email" class="inputsmalllong" placeholder="&nbsp;&nbsp;Retype your new email here">
    </p>
    <br/>
    <p style="font-size: 12px;">You will be sent a confirmation email to confirm the change, and in case you </p>
    <p style="font-size: 12px;">forgot your password, a resetted password will be sent to your registered email.</p>
    <br/>
    <button class="button">Change Email</button>
  </form>
</div>

</center>

<!-- Accordion javascript here -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>

</body>
</html>
