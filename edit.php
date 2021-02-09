<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama_komponen=$_POST['bulan'];
    $jumlah=$_POST['jumlah'];
 

    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbldana SET bulan='$bulan',jumlah='$jumlah' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: data.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM account WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama_komponen = $user_data['bulan'];
    $jumlah = $user_data['jumlah'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form nama_komponen="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>nama_komponen</td>
                <td><input type="text" nama_komponen="nama_komponen" value=<?php echo $nama_komponen;?>></td>
            </tr>
           
                <td>jumlah</td>
                <td><input type="text" nama_komponen="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" nama_komponen="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" nama_komponen="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>