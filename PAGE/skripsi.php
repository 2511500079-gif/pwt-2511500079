<?php
require_once __DIR__ . "/../config/koneksi.php";
?>

<div class="content-header">
  <div class="container-fluid">
    <h1>Data Skripsi</h1>
  </div>
</div>

<?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == "hapus") {
        $kd = $_GET['kd'];

        $query = mysqli_query($conn, "DELETE FROM skripsi WHERE id_skripsi = '$kd'");

        if ($query) {
            echo '<div class="alert alert-warning">Berhasil Dihapus</div>';
            echo '<meta http-equiv="refresh" content="1;url=starter.php?page=kelas">';
        }
    }
}
?>

<div class="content">
<div class="container-fluid">
<div class="card">
<div class="card-body">

<a href="starter.php?page=tambah_kelas" class="btn btn-primary btn-sm">
  Tambah Skripsi
</a>

<br><br>

<table class="table table-striped">
<thead>
<tr>
  <th>id_skripsi</th>
  <th>judul_skripsi</th>
  <th>topik_skripsi</th>
  <th>semester</th>
  <th>tahun_ajaran</th>
 
 
</tr>
</thead>

<tbody>
<?php
$no = 0;
$query = mysqli_query($conn, "SELECT * FROM skripsi");

while ($result = mysqli_fetch_array($query)) {
    $no++;
?>
<tr>
  <td><?= $no; ?></td>
  <td><?= $result['id_skripsi']; ?></td>
  <td><?= $result['judul_skripsi']; ?></td>
  <td>

    <a href="starter.php?page=kelas&action=hapus&id=<?= $result['id_kelas']; ?>"
       onclick="return confirm('Yakin ingin hapus?')">
      <span class="badge badge-danger">Hapus</span>
    </a>

    <a href="starter.php?page=edit_kelas&kd=<?= $result['id_skripsi']; ?>">
      <span class="badge badge-warning">Edit</span>
    </a>

  </td>
</tr>
<?php } ?>
</tbody>

</table>

</div>
</div>
</div>
</div>