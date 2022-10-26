
<?php include "connection.php";?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Admin-Portal</title>
</head>
<style>

</style>
<body>

<?php

?>
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      <div class="media-body">
      <img  src="https://st.depositphotos.com/2101611/3925/v/600/depositphotos_39258143-stock-illustration-businessman-avatar-profile-picture.jpg" width="50" alt="">
      <h4 class="m-0"><?php echo $_SESSION['username']; ?></h4> 
      </div>
    </div>
  </div>


  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0"></p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="./index.php" class="nav-link text-dark font-italic">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Ballina
            </a>
    </li>
    <li class="nav-item">
      <a href="./posts.php" class="nav-link text-dark font-italic">
                <i class="fa fa-cog mr-3 text-primary fa-fw"></i>
                Lajmet
            </a>
    </li>
    <li class="nav-item">
      <a href="./post.php" class="nav-link text-dark font-italic">
                <i class="fa fa-cog mr-3 text-primary fa-fw"></i>
                Shto Lajme
            </a>
    </li>
    <li class="nav-item">
      <a href="./category.php" class="nav-link text-dark font-italic">
                <i class="fa fa-cog mr-3 text-primary fa-fw"></i>
                Kategorite
            </a>
    </li>
    <li class="nav-item">
      <a href="./logout.php" class="nav-link text-dark font-italic">
      <i class="fa fa-sign-out text-primary" aria-hidden="true"></i>
                Logout
            </a>
    </li>
  </ul>
</div>

