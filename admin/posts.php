<?php include "./header.php";?>



<div id="dashboard" class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lajmet</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <?php 
    
    if(isset($_GET['delete']) && $_GET['delete'] !== NULL && $_GET['delete'] !==''){
        $lajmetID = $_GET['delete'];

        $sql = "DELETE FROM lajmet WHERE lajmetID = ?";
        if($stmt = mysqli_prepare($connect,$sql)){
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            $param_id = $lajmetID;
            if(!mysqli_stmt_execute($stmt)){
                echo "Dicka shkoi gabim";
            }
            else{
                header("Location: ./posts.php");
            }
        }
    }

    ?>
    
   

        <table class="table table-bordered ">
            <tr class="bg-primary text-white">

                <th>Titulli</th>
                <th>Permbajtje</th>
                <th>Imazhi</th>
                <th>Feshije</th>
            </tr>
            <?php
                $sql = "SELECT * FROM lajmet ORDER BY lajmetID DESC;";
                if($stmt = mysqli_prepare($connect,$sql)){
                    if(mysqli_stmt_execute($stmt)){
                        $result = mysqli_stmt_get_result($stmt);
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            $lajmetID = $row['lajmetID'];
                            $titulli = $row['titulli'];
                            $permbajtja = $row['permbajtja'];
                            $imazhi = $row['imazhi'];

                            echo "<tr>";
                            echo "<td>" . $titulli . "</td>";
                            echo "<td>" . substr($permbajtja,0,30) . "</td>";
                            echo "<td>" . substr($imazhi,0,30) . "</td>";
                            echo "<td> <a href='posts.php?delete=". $lajmetID. "' class='btn btn-danger'>Delete</a></td>";
                            echo "</tr>";
                        }
                    }
                }
            ?>


        </table>
    </div>
</div>