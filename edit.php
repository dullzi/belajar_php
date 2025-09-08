<?php include 'config.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <h2> Edit Data Mahasiswa</h2>
    <form method="post">
        <p>NIM : <input type="text" name="nim" value="<?php echo $row['nim']; ?>" required></p>
        <p>Nama : <input type="text" name="name" value="<?php echo $row['name']; ?>" required></p>
        <p>Alamat : <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required></p>
        <p>Jurusan : <input type="text" name="jurusan" value="<?php echo $row['jurusan']; ?>" required></p>
        <button type="submit" name="update">Update</button>
    </form>

    <?php 
    if(isset($_POST['update'])){
        $nim = $_POST['nim'];
        $name = $_POST['name'];
        $alamat = $_POST['alamat'];
        $jurusan = $_POST['jurusan'];

        $query = "UPDATE mahasiswa set nim='$nim', name='$name', alamat='$alamat', jurusan='$jurusan' where id=$id"; 

        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }
    }
    ?>
</body>

</html>