
<?php
include('config.php');
$produk = mysqli_query($mysqli,"SELECT * FROM tbldana");
while($row = mysqli_fetch_array($produk)){
    $nama_produk[] = $row['bulan'];
    
    $query = mysqli_query($mysqli,"select sum(jumlah) as jumlah from tbldana where id='".$row['id']."'");
    $row = $query->fetch_array();
    $jumlah_produk[] = $row['jumlah'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Membuat Grafik Menggunakan Chart JS</title>
    <script type="text/javascript" src="Chart.js"></script>
</head>
<body>
    <center>
    <div style="width: 100%;height: 100%">
        <canvas id="myChart"></canvas>
    </div>
 
 
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($nama_produk); ?>,
                datasets: [{
                    label: 'Grafik Batang Dana BTA Yang Terkumpul Tahun 2019 Perbulan',
                    data: <?php echo json_encode($jumlah_produk); ?>,
                    backgroundColor: 'rgba(200, 200, 300, 4.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
</center>
</body>
</html>
