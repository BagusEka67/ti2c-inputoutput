<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Barang Baru</title>
    <link rel="stylesheet" type="text/css" href="list-barang.css">
</head>
<body>
    <header>
        <h3>Barang yang sudah masuk</h3>
    </header>
    <nav>
        <a href="form-barang.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Merek</th>
                <th>Warna</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
        
    <?php
    $sql = "SELECT * FROM printer";
    $query = mysqli_query($db, $sql);
    while($data = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$data['no']."</td>";
        echo "<td>".$data['nama_merek']."</td>";
        echo "<td>".$data['warna']."</td>";
        echo "<td>".$data['jumlah']."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
<p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>