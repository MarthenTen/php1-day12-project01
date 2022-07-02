
<!--  
<?php 

require_once('../config/conection.php');



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
     
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col">

    <form action="../functions/add.php"  method="POST" autocomplete="off">

    <input type="text" name="kategori" placeholder="kategori" >

    <input type="text" name="judul" placeholder="judul">

    <input type="text" name="harga" placeholder="harga">

    <button type="submit" name="submit" >Tambah</button>



    </form>


        </div>
    </div>
</div>


</body>
</html>
-->





    <?php
    require_once('../config/conection.php');



    ?>



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dasbord</title>
        
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    </head> 
    <body>

        <div class="container  mt-5">
    <div class="row justify-content-center">

        
      
            <div class="col-4  p-5 bg-light shadow  bg-gradient rounded">

                <div class="row mb-3">
                    <div class="col text-center text-warning">
                        <h3>Update </h3>
                    </div>

                </div>


                 <form action="../functions/add.php"  method="POST" autocomplete="off">

    <div class="form-group mb-2" >
            <input type="text" class="form-control border border-warning border-3 " name="kategori" placeholder="kategori" />
       </div>

    <div class="form-group mb-2">

                    <input type="text" class="form-control  border border-warning border-3" name="judul" placeholder="judul" />
    </div>
    <div class="form-group mb-2">
                    <input type="text" class="form-control  border border-warning border-3" name="harga" placeholder="harga"/>
    </div>

        <button type="submit" class="btn  btn-warning  text-light" name="submit" >Update</button>
        </form>
    </div>
    </div>

      
    </div>

     
        </div>
        
    </body>
    </html>