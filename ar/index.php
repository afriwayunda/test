<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
<meta charset="utf-8"/>
	<title>Application Company Asset</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <style type="text/css">
        .nav-menu {
            cursor: pointer;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-primary ">
	    <a class="navbar-brand nav-menu" id="home">Company Asset Application</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" 
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  		<div class="collapse navbar-collapse justify-content-end">
			<ul class="navbar-nav">
      			<li class="nav-item"><a class="nav-link nav-menu text-white" id="home">Home</a></li>
      			<li class="nav-item"><a class="nav-link nav-menu text-white" id="asset_list">Asset List</a></li>
      			<li class="nav-item"><a class="nav-link nav-menu text-white" id="category_list">Category List </a></li>
     		  	<li class="nav-item"><a class="nav-link nav-menu text-white" id="department_list">Department List</a></li>
   		 	</ul>
		</div>
</nav>	

<div class="container" style="margin-top:20px">
<div class="halaman-menu"></div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.halaman-menu').load("home.php");
    $('.nav-menu').click(function(){
        var menu = $(this).attr('id');
        $('.halaman-menu').load(menu + ".php");
    });
});


</script>
</body>
</html>
