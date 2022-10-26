

<div class="row">
<div class="col-md-9">



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

            if($newsCount<2){
?>

<div class='card mdb-color mt-3 lighten-2 text-white z-depth-2'>
                                <a class="text-white text-decoration-none" href="./single.php?id=<?php echo $newsId;?>">
                                <img src="<?php echo $newsImage ?>" class="card-img" alt="...">
                                <div class='card-img-overlay'>
                                     <div class="card-body">
                                     <h4 class='card-title m-2'><?php echo $newsTitle ?></h4>
                                     </div>
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





  
  
    
    
    
      
      
    









