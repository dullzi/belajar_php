<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Mahasiswa</h1>
    
    <a href="add.php">Tambah Data Mahasiswa</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php
         $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
         $no = 1;
         while($row = mysqli_fetch_assoc($result)){
             echo "<tr>
             <td>$no</td>
             <td>$row[nim]</td>
             <td>$row[name]</td>
             <td>$row[alamat]</td>
             <td>$row[jurusan]</td>
             <td>
                <a href='edit.php?id=$row[id]'>Edit</a> 
                <a href='delete.php?id=$row[id]'>Delete</a>
             </td>
             </tr>";
         }   
        ?>
    </table>
</body>
</html>