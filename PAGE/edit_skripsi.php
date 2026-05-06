<?php
include __DIR__ . "/../config/koneksi.php";

if (!isset($conn)) {
    die("Koneksi tidak ditemukan!");
}


$kd = $_GET['kd'];


$edit = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM skripsi WHERE id_skripsi='$kd'"));


if(isset($_POST['simpan'])){
    $id_skripsi = $_POST['id_skripsi'];
    $judul_skripsi = $_POST['judul_skripsi'];

    if (empty($nm_skripsi)) {
        echo '<div class="alert alert-danger">Judul skripsi tidak boleh kosong!</div>';
    } else {

        $update = mysqli_query($conn,"UPDATE skripsi SET 
            judul_skripsi='$judul_skripsi'
            WHERE id_skripsi='$id_skripsi'
        ");

        if ($update) {
            echo '<div class="alert alert-success">Berhasil Diupdate</div>';
            echo '<meta http-equiv="refresh" content="1;url=starter.php?page=skripsi">';
        } else {
            echo '<div class="alert alert-danger">Gagal Update</div>';
        }
    }
}
?>

<div class="content-header">
<div class="container-fluid">
<h1>Edit Skripsi</h1>
</div>
</div>

<section class="content">
<div class="container-fluid">
<div class="card">
<div class="card-body">

<form method="POST">

<div class="form-group">
<label>ID Skripsi</label>
<input type="text" name="id_skripsi" value="<?= $edit['id_skripsi']; ?>" class="form-control" readonly>
</div>

<div class="form-group">
<label>Judul Skripsi</label>
<input type="text" name="Judul_Skripsi" value="<?= $edit['judul_skripsi']; ?>" class="form-control">
</div>

<br>
<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>

</form>

</div>
</div>
</div>
</div>
</section>