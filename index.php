<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Barang Baru</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <header>
        <h3>DATA BARANG</h3>
    </header>
    <h4>HALAMAN MENU</h4>
    <nav>
        <ul>
            <li><a href="form-barang.php">Tambah Barang Baru</a></li>
            <li><a href="list-barang.php">Data Barang</a></li>
        </ul>
    </nav>
    </div>

    <?php if(isset($_GET['status'])): ?>	
        
<div class="notif">
    <p>	 
    <?php	 
        if($_GET['status'] == 'sukses'){	 
            echo "Input Produk Berhasil!";	 
        } else{
            echo "Input Produk Gagal";
        }         
        ?>
    </p>
    <?php endif; ?>
</div>
</body>
</html>