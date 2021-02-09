
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
    
