


    <?php
    // echo $_GET['id'];
    include_once('../config/conection.php');
    $id = $_GET ['id'];

    $query = mysqli_query ($conn, "SELECT * FROM produk where id='$id' LIMIT 1");
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);


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
      
                     <div class="col-4  p-3  bg-light shadow bg-gradient rounded">

                            <div class="row mb-3">
                                <div class="col text-center text-warning">
                                    <h3>Update </h3>
                                </div>

                            </div>
                            <form action="../functions/update.php"  method="POST" autocomplete="off">

                                <div class="form-group ">

                                        <input type="text" hidden  name="id" value="<?php echo  $result[0]['id']; ?>">
                                </div>

                                <div class="form-group mb-2" >
                                        <input type="text" class="form-control" name="kategori" placeholder="kategori" value="<?php echo  $result[0]['kategori']; ?>"/>
                                </div>

                                <div class="form-group mb-2">
                                        <input type="text" class="form-control" name="judul" placeholder="judul" value="<?php echo  $result[0]['judul']; ?>"/>
                                    </div>

                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control" name="harga" placeholder="harga" value="<?php echo $result[0]['harga']; ?>"/>
                                    </div>

                                    <button type="submit" class="btn btn-warning" name="submit" >Update</button>
                            </form>
                       </div>
            </div>

      
    </div>

     
      
        
    </body>
    </html>