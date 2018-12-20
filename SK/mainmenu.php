<!doctype html>
<html>
<head>
	<?php include('Others/header.php'); ?>
	<title>Main Menu</title>
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
<?php include('Others/navbar.php'); ?>
<!-- Navigation bar -->



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
