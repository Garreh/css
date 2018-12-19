<!doctype html>
<html>
<head>
<title>Admin Panel</title>

  <?php include('Others/header.php'); ?>

</head>

<body>

  <?php include('Others/navbar.php'); ?>

<div class="container-fluid title">
  <div class="row-fluid">
    <div class="col-xl">
      Editing and Deleting Accounts
    </div>
  </div>
</div>

<br/>

<div class="row-fluid">
  <div class="col-4">
    <a href="adminmenu.php" class="backbtn">
      <i class="fas fa-angle-left" style="color:#274395;"></i> BACK
    </a>
  </div>
</div>

<center>

<form class="form-group justify-content-center">
  <div class="row justify-content-center">
  <div class="form-group mb-2 col-sm-5 mx-sm-3">
    <input type="text" class="form-control" id="inputSearch" placeholder="Enter Login ID or Employee ID here...">
  </div>
  <button type="submit" class="button mb-2" style="padding-top: 4px; padding-bottom: 4px;">Filter</button>
  </div>

  <br/>

  <div class="form-group row justify-content-center">
    <label for="inputFilter" class="col-sm-1.5 col-form-label">Filter by</label>
    <div class="col-sm-4">
      <select class="form-control" id="inputFilter">
        <option disabled selected>Select a filter option</option>
        <option>Recently Added</option>
        <option>Group</option>
      </select>
    </div>
  </div>
</form>

<br/>

<table class="table table-striped" style="width: 70%; text-align: center;">
<thead>
  <tr>
    <th scope="col">No.</th>
    <th scope="col">Login ID</th>
    <th scope="col">Employee Name</th>
    <th scope="col">Email</th>
    <th scope="col">Group</th>
    <th scope="col">Date Added</th>
    <th scope="col"> </th>
    <th scope="col"> </th>
  </tr>
</thead>

<tbody>
  <tr>
    <td scope="row">1</td>
    <td>Honda</td>
    <td>诺一</td>
    <td>nuoyi@gmail.com</td>
    <td>A</td>
    <td>12/11/2018</td>
    <td onclick="window.location.href = 'admineditaccounts.php';"><i class="fas fa-pencil-alt" style="cursor: pointer;"></i></td>
    <td onclick="deletion()"><i class="fas fa-trash-alt" style="cursor: pointer;"></i></td>
  </tr>

  <tr>
    <td scope="row">2</td>
    <td>Honda</td>
    <td>诺一</td>
    <td>nuoyi@gmail.com</td>
    <td>A</td>
    <td>12/11/2018</td>
    <td onclick="window.location.href = 'admineditaccounts.php';"><i class="fas fa-pencil-alt" style="cursor: pointer;"></i></td>
    <td onclick="deletion()"><i class="fas fa-trash-alt" style="cursor: pointer;"></i></td>
  </tr>

  <tr scope="row">
    <td>3</td>
    <td>Honda</td>
    <td>诺一</td>
    <td>nuoyi@gmail.com</td>
    <td>A</td>
    <td>12/11/2018</td>
    <td onclick="window.location.href = 'admineditaccounts.php';"><i class="fas fa-pencil-alt" style="cursor: pointer;"></i></td>
    <td onclick="deletion()"><i class="fas fa-trash-alt" style="cursor: pointer;"></i></td>
  </tr>
</tbody>
</table>

</center>

<script>
  function deletion() {
    var result = confirm("Are you sure you want to delete account Honda? This action cannot be undone.");
    if (result == true) {
      window.location.href="admineditaccounts.php";
    } else {
      window.location.href="adminpanel.php";
    }
  }
</script>

</body>
</html>
