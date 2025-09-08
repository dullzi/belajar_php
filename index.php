<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-5xl bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold text-center text-gray-700 mb-6">📚 Data Mahasiswa</h1>

        <div class="mb-4 flex justify-between">
            <a href="add.php"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md shadow">
                + Tambah Data Mahasiswa
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse bg-white rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 text-left">
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">NIM</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Alamat</th>
                        <th class="px-4 py-2">Jurusan</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <tr class='border-b hover:bg-gray-50'>
                                <td class='px-4 py-2 text-center'>$no</td>
                                <td class='px-4 py-2'>$row[nim]</td>
                                <td class='px-4 py-2'>$row[name]</td>
                                <td class='px-4 py-2'>$row[alamat]</td>
                                <td class='px-4 py-2'>$row[jurusan]</td>
                                <td class='px-4 py-2 space-x-2'>
                                    <a href='edit.php?id=$row[id]' 
                                       class='text-sm bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md'>
                                       Edit
                                    </a>
                                    <a href='delete.php?id=$row[id]' 
                                       class='text-sm bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-md'
                                       onclick=\"return confirm('Yakin ingin menghapus data ini?')\">
                                       Delete
                                    </a>
                                </td>
                            </tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>