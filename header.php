<?php include "./admin/connection.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Realpress | Lajmet e fundit</title>
</head>
<style>

</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
      <a id="emri" class="navbar-brand m-3 h1 text-white" href="./index.php">Realpress</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id="nav" class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php
                    $sql = "SELECT * FROM kategorite";
                    if($stmt = mysqli_prepare($connect, $sql)){
                    if(mysqli_stmt_execute($stmt)){
                    $result = mysqli_stmt_get_result($stmt);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        $id = $row['id'];
                        $emri_kategorise = $row['emri_kategorise'];
                        echo "<li class='nav-item'>";
                        echo "<a id='kateogri' href='./category.php?id=${id}' class='nav-link text-white'>" . $emri_kategorise . "</a>";
                        echo "</li>";
                    }
                }
               } 
            ?>
        </ul>
      </div>
    </div>
  </nav>