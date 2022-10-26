<?php include "./header.php";?>
<div class="container">
    
        <?php 
     if(isset($_GET['id']) && $_GET['id'] !== NULL && $_GET['id'] !==''){
         $sql = "SELECT * FROM lajmet WHERE lajmetID = ?";
         if($stmt = mysqli_prepare($connect,$sql)){
             mysqli_stmt_bind_param($stmt,"i",$param_id);
            $param_id = $_GET['id'];
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                 $newsTitle = $row['titulli'];
                 $newsContent = $row['permbajtja'];
                 $newsImage = $row['imazhi'];
                }
            }

         }
     }
    
    ?>
   <div class="row">
        <div class="col-sm-9 mt-3 ">

            <div class="card">
                <img src="<?php if(isset($newsImage)){ echo $newsImage; } ?>" alt="" class="card-img-top">
                <div class="card-body">
                    <h2><?php if(isset($newsTitle)){ echo $newsTitle; } ;?></h2>
                    <p><?php if(isset($newsContent)){ echo $newsContent; } ?></p>
                </div>

            </div>
            
        </div>
        
        

    </div>
 
</div>
</div>
<?php include "./footer.php";?>