<?php
include __DIR__ . "/../config/koneksi.php";

if (!isset($conn)) {
    die("Koneksi tidak ditemukan!");
}

    
$carikode = mysqli_query($conn, "SELECT MAX(id_skripsi) as kode FROM skripsi");
$data = mysqli_fetch_array($carikode);
$kode = $data['kode'];


if ($kode == NULL) {
    $urutan = 1;
} else {
    $urutan = (int)$kode + 1;
}

$hasilkode = $urutan;


if (isset($_POST['tambah'])) {

    $id_skripsi = $_POST['id_skripsi'];
    $judul_skripsi = $_POST['judul_skripsi'];

    
    if (empty($id_skripsi) || empty($judul_skripsi)) {
        echo '<div class="alert alert-danger">Data tidak boleh kosong!</div>';
    } else {

        $insert = mysqli_query($conn, "INSERT INTO skripsi 
        (id_skripsi, judul_skripsi) 
        VALUES 
        ('$id_skripsi','$judul_skripsi')");

        if ($insert) {
            echo '<div class="alert alert-success">Berhasil Disimpan</div>';
            echo '<meta http-equiv="refresh" content="1;url=starter.php?page=skripsi">';
        } else {
            echo '<div class="alert alert-danger">Gagal Disimpan</div>';
        }
    }
}
?>

<section class="content">
<div class="container-fluid">
<div class="card">
<div class="card-body">

<form method="POST">

<div class="form-group">
<label>ID Skripsi</label>
<input type="number" name="id_skripsi" value="<?= $hasilkode ?>" class="form-control" readonly>
</div>

<div class="form-group">
<label>Judul Skripsi</label>
<input type="text" name="judul_skripsi" class="form-control">
</div>

<br>
<button type="submit" name="tambah" class="btn btn-primary">Simpan</button>

</form>

</div>
</div>
</div>
</div>
</section>