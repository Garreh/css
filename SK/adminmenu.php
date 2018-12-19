<!doctype html>
<html>
<head>
	<link rel = "stylesheet" href="main.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous">
  </script>
  <script src="main.js"></script>
  <title>Management Menu</title>
  <style>


  .grid-container {
    display:grid;
    grid-template-columns: auto auto ;
    grid-gap: 50px;
    padding: 10px;
    margin-top:20%;
  }

  .grid-item {
    width: 259px;
    height: 259px;

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

<div class="title" style="height:295px; background-color:#274395;">
  <div style="margin-top:100px;">
    <a>Manage Employee Accounts</a>
  </div>

</div>


<center>

  <div class="grid-container">
    <div class="grid-item">

    </div>
    <div class="grid-item">
      v
    </div>

    <div class="grid-text">
        <a href="adminaddaccounts.html"><button style="width: 246.13px; height: 65px; font-size: 27px;" class="button">Create</button></a>
    </div>
    <div class="grid-text">
        <a href="adminpanel.html"><button style="width: 246.13px; height: 65px; font-size: 27px;" class="button">Edit and Delete</button></a>
    </div>
</center>



</body>
</html>