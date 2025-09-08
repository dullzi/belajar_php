<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Data</h2>
    <form action="" method="post">
    <p>ID : <input type="text" name="id" required></p>   
    <p>NIM : <input type="text" name="nim" required></p>
    <p>Nama : <input type="text" name="name" required></p>
    <p>Alamat : <input type="text" name="alamat" required></p>
    <p>Jurusan : <input type="text" name="jurusan" required></p>
    <button type="submit" name="submit">Submit</button>
    </form>

    <?php 
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $name = $_POST['name'];
        $alamat = $_POST['alamat'];
        $jurusan = $_POST['jurusan'];

        $query = "insert into mahasiswa (nim,name,alamat,jurusan) values('$nim','$name','$alamat','$jurusan')";

        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }
    }
    ?>
</body>
</html>