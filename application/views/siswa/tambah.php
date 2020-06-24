<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Koleksi Wibu >v<</title>
</head>
<body>
    <h1>Tambah Koleksi Wibuu >v<</h1>

<form action="<?= site_url('Siswa/tambah') ?>" method="post">
    <label for="">NIS</label>
    <input type="text" placeholder="Kode Buku" name="nis">
    <br>
    <label for="">Kelas</label>
    <input type="text" placeholder="Judul Buku" name="kelas">
    <br>
    <label for="">Nama</label>
    <input type="text" placeholder="Jumlah Buku" name="nama">
    <br>
    <label for="">Tempat Tanggal Lahir</label>
    <input type="date" placeholder="Kode Kategori" name="ttl">
    <br>
    <label for="">Agama</label>
    <input type="text" placeholder="Pengarang" name="agama">
    <br>
    <label for="">Gender</label>
    <input type="text" placeholder="Kode Penerbit" name="gender">
    <br>
    <label for="">Alamat</label>
    <input type="text" placeholder="Tahun Penerbit" name="alamat">
    <br>
    <label for="">No Telepon</label>
    <input type="text" placeholder="Tahun Penerbit" name="no_hp">
    <br>
    <button type="submit">Save oh yeah</button>
</form>

</body>
</html>