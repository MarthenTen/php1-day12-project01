
<?php 

require_once('../config/conection.php');
require_once('../config/site_info.php');
require_once('../functions/view-all.php');




$query = mysqli_query($conn,"SELECT * FROM produk");
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);
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

    <div class="container mt-5">
<div class="row justify-content-center ">

   
    <div class="col-10  bg-dark   bg-gradient p-2 text-dark  rounded   shadow">
           <a href="../index.php" class=" text-decoration-none  d-inline text-center  "> <h1 class="text-warning "><?php echo $site_title; ?></h1>  
                         
           </a>


           <div class="mb-2 text-end">


 <a class="badge bg-primary text-decoration-none text-light d-inline btn-small  " href="../views/tambah.php">Tambah Produk</a>          </div>  
       
         <div class="table-responsive text-center ">
             

        <table class="table table-dark table-hover border border-light">
            
            <tr class="table-success">
                <th>Id</th>
                <th>Kategori</th>
                <th>judul</th>
                <th>Harga</th>
                <th >Actios</th>
      
                
            </tr>

            <?php if($result->num_rows > 0){while($row = $result->fetch_assoc()){ ?>
            <tr> 
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['kategori']; ?></td>
                <td><?php echo $row['judul']; ?></td>
             <td>     <?php echo 'Rp. ' . number_format($row['harga'], 2,',','.'); ?></td>

                <td>

                 <a class="badge text-bg-success text-decoration-none" href="../views/edit.php?id=<?php echo $row['id'] ?>">
                    Edit
                </a>


                    <a class="badge text-bg-danger  mx-1 text-decoration-none "href="../functions/delete.php?id=<?php echo $row['id'] ?>" >
                       Hapus  
                    </a>
               
            </td>
            </tr>

       <?php }}  ?>
 

        </table>
</div>

   </div>
</div> 
    </div>
    
</body>
</html>