<div class='col-md-3'>
<?php 


$sql = "SELECT * FROM lajmet ORDER BY lajmetID DESC;";
if($stmt = mysqli_prepare($connect,$sql)){
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
        $newsCount = 1;
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $newsId = $row['lajmetID'];
            $newsTitle = $row['titulli'];
            $newsContent = $row['permbajtja'];
            $newsImage = $row['imazhi'];

            if($newsCount<4){
?>
<div class="card mdb-color mt-3 lighten-2  z-depth-2">
              <a class="text-body text-decoration-none" href="./single.php?id=<?php echo $newsId;?>">
              <img src=" <?php echo $newsImage ?>" class="card-img-top" alt="...">
              <div class="card-body">
              <h6 class="card-title"><?php echo $newsTitle ?></h6>
              <a href="./single.php?id=<?php echo $newsId;?>" class='btn btn-danger'>Lexo me shume</a>
              </div>
              </a>
              </div>
             <?php
             }
            $newsCount++;
        }
    }
}

?>









