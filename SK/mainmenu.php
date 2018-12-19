<!doctype html>
<html>
<head>
	<link rel = "stylesheet" href="main.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous">
  </script>
  <script src="main.js"></script>
  <style>


  .grid-container {
    display:grid;
    grid-template-columns: auto auto auto;
    grid-gap: 50px;
    padding: 10px;
  }

  .grid-item {
    width: 217px;
   height: 231px;

    background-color:black;
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



<br/><br/><br/>



<center>
<p class="title3" style="color: #47525E;font-size: 24px;font-weight: 700; line-height: 34px; text-align:center;">Good Evening @user, what would you like to do today?</p>
<br><br><br><br>
<div class="grid-container">
  <div class="grid-item">
    a
  </div>
  <div class="grid-item">
    v
  </div>
  <div class="grid-item">
    c
  </div>
  <div class="grid-btn">
    <a href="importmenu.html"><button style="  width: 246.13px; height: 65px; font-size: 27px;" class="button" >Import</button></a>
  </div>
  <div class="grid-btn">
    <button style="  width: 246.13px; height: 65px; font-size: 27px;" class="button">Export</button>
  </div>
  <div class="grid-btn">
    <button style="  width: 246.13px; height: 65px; font-size: 27px;" class="button">Accounting</button>
  </div>
</div>
<br><br><br><br><br>
<div style="grid-template-columns: auto auto; width:70%;" class="grid-container">
  <div class="grid-item">
a
  </div>
  <div class="grid-item">
a
  </div>
  <div class="grid-btn">
    <button style="  width: 246.13px; height: 65px; font-size: 27px;" class="button">Management</button>
  </div>
  <div class="grid-btn">
    <button style="  width: 246.13px; height: 65px; font-size: 27px;" class="button">Sales</button>
  </div>
</div>
<br><br><br><br><br><br>

</center>



</body>
</html>