<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Home Page</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style>
		/* width */
		::-webkit-scrollbar {
		  width: 10px;
		}
		/* Track */
		::-webkit-scrollbar-track {
		  background: #f1f1f1; 
		}
		 
		/* Handle */
		::-webkit-scrollbar-thumb {
		  background: #888; 
		}
		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
		  background: #555; 
		}
</style>
</head>
<body id="page-top">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" action="Search.php" method="POST">
      <div class="input-group">
        <input type="text" name="search" class="" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button action="stng" class="btn btn-primary" type="button">
            <a href="Search.php">
            	<i class="fas fa-search"></i>
            </a>
          </button>
        </div>
      </div>
    </form>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        	<a href="#">
		          <i class="fas fa-bell fa-fw" ></i>
		          <!-- this is the notification bell -->
      		</a>
      <li class="nav-item dropdown no-arrow">
        <!-- <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
       
          
      </li>
    </ul>
  </nav>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="posts.php">
          <i class="fas fa-fw fa-box-alt"></i>
          <span>Home</span></a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Request Content</span></a>
      </li>
    </ul>
