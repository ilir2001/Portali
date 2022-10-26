<?php include "./header.php";?>

<div class="container">
    <div class="row">


            <div class="news-wraper">
            <?php
            if(isset($_GET['id']) && $_GET['id'] !== NULL && $_GET['id'] !==''){
                $sql = "SELECT * FROM kategorite WHERE id = ?";
                if($stmt = mysqli_prepare($connect,$sql)){
                    mysqli_stmt_bind_param($stmt,"i",$param_id);
                    $param_id = $_GET['id'];
                    if(mysqli_stmt_execute($stmt)){
                        $result = mysqli_stmt_get_result($stmt);
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            $titulli = $row['emri_kategorise'];

                            

                        }
                    }
                }
            }
            
            ?>
                <h2 class="p-5"><?php echo $titulli; ?></h2>
                

                <div class="row">
                
                    <?php
                    if(isset($_GET['id']) && $_GET['id'] !== NULL && $_GET['id'] !==''){
                    $sql = "SELECT * FROM lajmet WHERE kategoria = ? ORDER BY lajmetID DESC;";

                    if($stmt = mysqli_prepare($connect,$sql)){
                        mysqli_stmt_bind_param($stmt,"i",$param_id);
                        $param_id = $_GET['id'];

                        if(mysqli_stmt_execute($stmt)){
                            $result = mysqli_stmt_get_result($stmt);
                            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                $newsId = $row['lajmetID'];
                                $newsTitle = $row['titulli'];
                                $newsImage = $row['imazhi'];

                                ?>

                                <div class="col-lg-4 mt-3">
                                <a class="text-decoration-none text-dark" href="./single.php?id=<?php echo $newsId;?>">
                                
                                <div style="width:360px;height:300px;" class="card">
                                     <img style="width:358px;height:300px;" src="<?php echo $newsImage; ?>" alt="">
                                     <h5 class="p-1"><?php echo $newsTitle; ?></h5>
                                     <div class="card-body">
                                         
                                     </div>
                                 </div>
                                </a>
                             </div>
                   
                    <?php
                            }
                        }
                    }
                }
                        
                    ?>


                </div>
                
            </div>
        </div>
        </div>
        </div>
        
<?php include "./footer.php";?>

