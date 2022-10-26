<?php include "./header.php";?>
<!-- Begin Page Content -->
<div id="dashboard" class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Shto Kategorie</h1>
    </div>

    <!-- Content Row -->
    <div class="row ">
    <?php
    $alert = "Kategoria u shtua me sukses";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $sql = "INSERT INTO kategorite(emri_kategorise) VALUES (?)";

        if($stmt= mysqli_prepare($connect,$sql)){
            mysqli_stmt_bind_param($stmt, 's', $param_name);
            $param_name = $_POST['kategorite'];
            if(mysqli_stmt_execute($stmt)){
                echo "<p class= 'h5 text-success'> $alert </p>";

            }

        }
       
    }
?>
        <div class="col-lg-6">
            <form action="" method="POST">
                <div class="form-group">
                <label for="category">Emri i kategorise:</label>
                    <input type="text" name="kategorite" class="form-control">
                </div>
                
                <br>
                <input type="submit" name="submit" value="Shto Kategorinë" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>


<div id="dashboard" class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategorite</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <table class="table table-bordered w-auto">
            <tr class="bg-primary text-white">
                <th>Emri i kategorise</th>
                <th>Opsioni Fshije</th>
            </tr>
            <?php
               $sql = "SELECT * FROM kategorite";
               if($stmt = mysqli_prepare($connect, $sql)){
                if(mysqli_stmt_execute($stmt)){
                    $result = mysqli_stmt_get_result($stmt);

                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        $id = $row['id'];
                        $emri_kategorise = $row['emri_kategorise'];
                        echo "<tr>";
                        
                        echo "<td>" . $emri_kategorise . "</td>";
                        echo "<td><a class='btn mx-3 btn-danger' href='category.php?delete=". $id."'>Delete</a></td>";
                        echo "</tr>";
                    }
                }
               } 
            ?>
        </table>
        <?php 
        if(isset($_GET['delete']) && $_GET['delete'] !== NULL && $_GET['delete'] !==''){
            $sql = "DELETE FROM kategorite WHERE id = ?";
            if($stmt= mysqli_prepare($connect,$sql)){
                mysqli_stmt_bind_param($stmt, "i", $param_id);
                $param_id = $_GET['delete'];

                if(!mysqli_stmt_execute($stmt)){
                    echo "gabim!";
                }
            }
        }

        mysqli_stmt_close($stmt);
        mysqli_close($connect);
               
        ?>
    </div>
</div>


