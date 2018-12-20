<!doctype html>
<html>
<head>

  <title>Import Menu</title>
	<?php include('Others/header.php'); ?>
  <style>


  .grid-container {
    display:grid;
    grid-template-columns: auto auto ;
    grid-gap: 50px;
    padding: 10px;

  }

  .grid-item {
    width: 259px;
    height: 259px;

    background-color:black;
  }
</style>
</head>

<body>
<?php include('Others/navbar.php'); ?>
<!-- Navigation bar -->
<div class="container-fluid title" style="height:220px; background-color:#274395;">
	<div class="row-fluid">
		<div class="col pt-5">
			Import Menu
		</div>
	</div>
</div>


<center>

  <div class="grid-container">
    <div class="grid-item">
      a
    </div>
    <div class="grid-item">
      v
    </div>
    <div class="grid-text">
        <button style="  width: 246.13px; height: 65px; font-size: 27px;" class="button">Create</button>
    </div>
    <div class="grid-text">
        <button style=" width: 246.13px; height: 65px; font-size: 27px;" class="button">Filter and Edit</button>
    </div>
</center>



</body>
</html>
