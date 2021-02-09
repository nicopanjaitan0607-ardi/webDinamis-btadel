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
<form  method="POST">
	<label>Masukkan Bulan</label> <br> 
	<input type="text" name="bulan" placeholder="Masukkan Bulan"> <br> <br>
	<label>Masukkan Jumlah</label>	<br>
	<input type="text" name="jumlah" placeholder="Jumlah"> <br> <br>
	<input type="submit" name="simpan" value="Submit">
</form>

<?php
	if(isset($_POST['simpan'])){
	$database = new mysqli('localhost', 'root','','newsportal');
	$query = 'INSERT INTO tbldana(`bulan`, `jumlah`) VALUES(?,?)';	

	$statement = $database->prepare($query);
	$statement->bind_param('ss', $_POST['bulan'], $_POST['jumlah']);
	$statement->execute();
	header('Location: data.php');
	}


?>
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
