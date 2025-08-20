<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { width: 50%; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="number"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-kembali { background-color: #f44336; text-decoration: none; display: inline-block; }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Tambah Barang Baru</h2>
    <form action="prosestambah.php" method="POST">
        <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" id="kode_barang" name="kode_barang" required>
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" id="nama_barang" name="nama_barang" required>
        </div>
        <div class="form-group">
            <label for="jumlah_barang">Jumlah Barang</label>
            <input type="number" id="jumlah_barang" name="jumlah_barang" required>
        </div>
        <div class="form-group">
            <label for="harga_barang">Harga Satuan</label>
            <input type="number" id="harga_barang" name="harga_barang" required>
        </div>
        <button type="submit" class="btn">Simpan</button>
        <a href="index.php" class="btn btn-kembali">Batal</a>
    </form>
</div>

</body>
</html>