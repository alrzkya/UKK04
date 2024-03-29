<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include('navbar.php') ?>
  <div class="container">
    <br>
    <h1>Daftar Pelanggan</h1>
    <br>
    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <table class="table table-striped">
      <thead class="table-primary">
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
      </thead>

      <?php
      //ambil koneksi
      include('../config.php');
      $sql = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan");
      foreach ($sql as $pelanggan) {
      ?>
        <tr>
          <td><?= $pelanggan['id_pelanggan'] ?></td>
          <td><?= $pelanggan['nama_pelanggan'] ?></td>
          <td><?= $pelanggan['alamat_pelanggan'] ?></td>
          <td><?= $pelanggan['telepon_pelanggan'] ?></td>
        </tr>
      <?php
      } ?>

    </table>
    </div>



  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>