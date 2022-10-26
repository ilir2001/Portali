<div class='row row-cols-1 row-cols-md-2 g-4 mt-1'>


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

            if($newsCount<5){
?>

<div class='col'>
              <div style="width:400px;height:300px;" class='card'>
              <a class="text-body text-decoration-none" href="./single.php?id=<?php echo $newsId;?>">
              <img style="width:400px;height:225px;"  src="<?php echo $newsImage ?>" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title"><?php echo $newsTitle ?> </h5>
              </div>
              </a>
              </div>
              </div>

<?php
            }
          $newsCount++;
        }
    }
}

?>





              
              
         
         

</div>
</div>





















