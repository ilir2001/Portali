<?php include "./header.php";?>
<!-- Begin Page Content -->
<div id="dashboard" class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Shto Lajme</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $sql = "INSERT INTO lajmet(titulli,permbajtja,imazhi,kategoria) VALUES (?,?,?,?)";
                
                if($stmt = mysqli_prepare($connect, $sql)){
                    mysqli_stmt_bind_param($stmt, 'sssi',$param_title,$param_content,$param_image,$param_category);

                    $param_title = $_POST['title'];
                    $param_content = $_POST['content'];
                    $param_image = $_POST['image'];
                    $param_category = $_POST['category'];
                    if(mysqli_stmt_execute($stmt)){
                        header("Location: ./post.php");
                        echo "Lajmi u postua";
                       ?>

        <?php
                    }
                }
                mysqli_stmt_close($stmt);
                mysqli_close($connect);
            }

        ?>
        <div class="col-lg-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">Titulli</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content">Permbajtja</label>
                    <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                <label for="category">Kategoria</label>
                    <select name="category" class="form-control">
                        <?php
                            $sql = "SELECT * FROM kategorite";
                            if($stmt = mysqli_prepare($connect, $sql)){
                                if(mysqli_stmt_execute($stmt)){
                                    $result = mysqli_stmt_get_result($stmt);
                                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                        $id = $row['id'];
                                        $emri_kategorise = $row['emri_kategorise'];
                                        echo "<option value='".$id."'>". $emri_kategorise ."</option>";
                                    }
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Imazhi</label>
                    <input type="text" name="image" class="form-control">
                </div>
                <br>
                <button class="btn btn-primary">Shto Lajmin</button>
                <br>
                <br>
            </form>
        </div>
    </div>
</div>

