

<?php include "./header.php";?>



<div id="dashboard" class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ballina</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4 ">
            <div class="card border-left-primary shadow h-100 py-2 bg-primary">
                <div class="card-body ">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                               Kategori</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                            
                            $sql = "SELECT * FROM kategorite";
                            $result = $connect->query($sql);
                            $num_rows = mysqli_num_rows($result);
                            echo "<h3 class='text-white'>".$num_rows."</h3>"; 
                            
                        ?>
                    
                            
                    
                              
                            </div>
                        </div>
                        <div class="col-auto">
                        <i class="fa fa-list  fa-2x text-white"></i>
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>


       
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2"> 
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                               Lajme</div> 
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                            
                            $sql = "SELECT * FROM lajmet";
                            $result = $connect->query($sql);
                            $num_rows = mysqli_num_rows($result);
                            echo "<h3 class='text-white'>".$num_rows."</h3>";
                           
                        ?>
                            
                            </div>
                        </div>
                        <div class="col-auto">
                     
                        <i class="fa fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                               Perdorues</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                            
                            $sql = "SELECT * FROM users";
                            $result = $connect->query($sql);
                            $num_rows = mysqli_num_rows($result);
                            echo "<h3 class='text-white'>".$num_rows."</h3>";
                            $connect->close();
                        ?>
                            </div>
                        </div>
                        <div class="col-auto">
                        
                            <i class="fa fa-users fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     
        
    </div>
</div>


    
</body>
</html>