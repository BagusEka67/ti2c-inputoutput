<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Barang Baru</title>
        <link rel="stylesheet" type="text/css" href="form-barang.css">
    </head>
    <body>
        <header>
            <h3>Tambah Data Barang</h3>
        </header>
        <form action="proses-form.php" method="POST">
            <fieldset>
                <p>
                    <label for="no">No: </label>
                    <input type="text" name="no" />
                </p>
                <p>
                    <label for="nama_merek">Nama Merek: </label>
                    <input type="text" name="nama_merek" />
                </p>
                <p>
                    <label for="warna">Warna: </label>
                    <input type="text" name="warna" />
                </p>
                <p>
                    <label for="jumlah">Jumlah: </label>
                    <input type="text" name="jumlah" />
                </p>
                <p>
                    <input type="submit" value="Simpan" name="Simpan" />
                    <button type="reset">Ulangi</button>
                    <button type="button" onclick="window.location.href='index.php'">Kembali</button>
                </p>
            </fieldset>
        </form>
    </body>
</html>