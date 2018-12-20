<!doctype html>
<html>
<head>


  <title>Management Menu</title>
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
	      Manage User
	    </div>
	  </div>
	</div>



</div>
<div class="container pt-5">
  <div class="row justify-content-around">
    <div class="col">
      	<img src="Others/like.png" class=" rounded  " alt="..." style="  width: 246.13px; height: 246.13px;" >
    </div>
    <div class="col">
      <img src="Others/like.png" class="rounded " alt="..." style="  width: 246.13px; height: 246.13px;">

    </div>
    <div class="col">
      <img src="Others/like.png" class="rounded " alt="..." style="  width: 246.13px; height: 246.13px;">

    </div>
  </div>

	<div class="row justify-content-around">
		<div class="col">
				<img src="Others/like.png" class="img-fluid rounded img-responsive " alt="..." style="  width: 246.13px; height: 246.13px;" >

		</div>

		<div class="col-">
			<img src="Others/like.png" class="img-fluid rounded img-responsive " alt="..." style="  width: 246.13px; height: 246.13px;">

		</div>
	</div>

</div>

<div class="container justify-content-md-center">
  <div class="row justify-content-md-center">
    <div class="col justify-content-md-center">
      1 of 2
    </div>
    <div class="col justify-content-md-center">
      2 of 2
    </div>
  </div>
  <div class="row">
    <div class="col justify-content-md-center">
      1 of 3
    </div>
    <div class="col justify-content-md-center">
      2 of 3
    </div>
    <div class="col justify-content-md-center">
      3 of 3
    </div>
  </div>
</div>


<div class="container ">
  <div class="row">
    <div class="col align-items-center">
      One of three columns
    </div>
    <div class="col align-self-center">
      One of three columns
    </div>
    <div class="col align-self-end">
      One of three columns
    </div>
  </div>
</div>

<!-- <center>

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
</center> -->



</body>
</html>
