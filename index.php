<?php 
//INTEGRASI CONFIG

//Koneksi
require_once('./config/conection.php');






//Site Info
require_once('./config/site_info.php');




require_once('./functions/view-all.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body class="bg-light p-3 ">

    <div class="container bg-dark text-light rounded shadow p-4  ">
        <div class="row  d-flex justify-content-between  ">
            <div class="col-6">
                <h1 class="text-warning fw-bolder">   <?php echo $site_title; ?></h1>
                <p>  <?php echo $site_tag_line; ?></p>
                <small class="test-secondary">
                <i>  <?php echo $site_description; ?></i>
                </small>

             </div>

             <div class="col-6 text-end ">

        <div class="p-2"><a class="test-secondary btn btn-warning btn-small" href="./views/dasbor.php">Dasbord</a>
                       
                
                   
</div>


                    

              
   
             </div>
        </div> 
    </div>


    <!--  CONTENT -->

    <!-- .CONTAINER -->
    <div class="container p-5">
        <!-- .row -->
        <div class="row">
 <?php if($result->num_rows > 0){while($row = $result->fetch_assoc()){ ?>

            <!-- .col -->
            <div class="col-lg-4 mb-4">
                <!-- card  -->
                <div class="card bg-dark text-light border-warning shadow">
                    <!-- card Body -->
                    <div class="card-body">
                        <small><i><?php echo $row['kategori']; ?></i></small>
                        <h3 class="text-warning"><?php echo $row['judul']; ?></h3>
                    </div>
                    <!-- end card body -->
                    <div class="card-footer d-flex justify-content-between ">
                        <div class ="fw-bolder fs-4">                     
                                 <?php echo 'Rp. ' . number_format($row['harga'], 2,',','.'); ?>
                        </div>
                        <div>
                            <a href="#" class="btn btn-warning btn-small">Beli</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end card -->
            <!-- end .col -->
   <?php }}  ?>
 

        </div>
        <!-- end .row -->
    </div>
    <!-- END .CONTAINER -->

    <!-- END CONTEND -->

    
</body>
</html>