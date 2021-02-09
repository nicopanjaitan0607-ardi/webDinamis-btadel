<?php
include "config.php";
$query = mysqli_query($mysqli,"SELECT * FROM tbldana ORDER BY id DESC");
?>
<?php 
session_start();
include('includes/config.php');

    ?>


  

    <!-- Navigation -->
 

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

<center>
<form action="" method="post">
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
            <?php echo "<td> <a href='delete.php?id=$data[id]'>Delete</a></td></tr>"; ?>       
        
        </tr>

        <?php $no++; } ?>
        <?php } ?>

    </table>
     <a href="tambah.php">Tambahkan Data</a>
     <a href="chart.php">Grafik Batang</a>
    
</form>
</center>
    </div>
    <!-- /.container -->
</div>
    <!-- Footer -->
      
  
