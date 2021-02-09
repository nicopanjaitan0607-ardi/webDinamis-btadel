<?php
include "config.php";
$query = mysqli_query($mysqli,"SELECT * FROM tbldana ORDER BY id DESC");
?>
<?php 
session_start();
include('includes/config.php');

    ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BTA</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <style type="text/css">
        .foot{
            background-color: grey;
            color: white;
            margin-top:52%;
            width: 120%;
            margin-right: 30%;
        }
        form{
            margin-left: 40%;
            margin-top: 30%;
        }
        p{

        }
    </style>

  </head>

  <body>

    <!-- Navigation -->
   <?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

<center>

<form action="" method="post">
    <h3>Jumlah Pemasukan BTA 2019 Perbulan</h3>
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Bulan</th>
            <th>Jumlah</th>
         
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["bulan"];?></td>
            <td>Rp.<?php echo $data["jumlah"];?></td>
                
        
        </tr>

        <?php $no++; } ?>
        <?php } ?>

    </table>
     
     <a href="chart.php">Grafik Batang</a>
    
</form>
</center>
    </div>
    <!-- /.container -->
</div>
    <!-- Footer -->
      
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 


  </body>



</html>
