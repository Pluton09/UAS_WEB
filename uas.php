<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bus Pariwisata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>
<body>

<!-- ✅ Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#"><i class="bi bi-bus-front-fill"></i> Bus Pariwisata</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#home">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#form">Formulir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tabel">Daftar Bus</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<header class="bg-image text-white text-center py-5" id="home">
  <div class="container">
    <h1 class="display-5 fw-bold"><i class="bi bi-bus-front-fill"></i> Bus Pariwisata</h1>
    <p class="lead">Formulir Pendaftaran dan Daftar Keberangkatan Bus Wisata</p>
  </div>
</header>

<div class="container my-5">

  <!-- ✅ Slider Gambar Manual -->
  <div id="carouselBus" class="carousel slide mb-5 shadow rounded overflow-hidden">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://tiketwisata.surabaya.go.id/storage/tour/bis_shopping_culinary_track_1649147871.jpeg" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Bus 1">
      </div>
      <div class="carousel-item">
        <img src="https://www.sembodorentcar.co.id/images/news/2-2_-_Copy.jpeg" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Bus 2">
      </div>
      <div class="carousel-item">
        <img src="https://www.saturental.com/media/uploads/2018/07/saturental-foto-bus-pariwisata-trac-shd-hdd-terbaru-48-59-seats-a.jpg" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Bus 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBus" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselBus" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

 <!-- Penjelasan -->
<div class="card shadow-lg mb-4">
  <div class="card-body bg-light">
    <h5 class="text-success fw-bold"><i class="bi bi-info-circle-fill"></i> Tentang Layanan Bus Pariwisata</h5>
    <p class="mb-0 text-dark">
      Layanan Bus Pariwisata kami dirancang untuk memberikan pengalaman perjalanan yang aman, nyaman, dan menyenangkan bagi para wisatawan. Sistem ini dibuat untuk membantu pengelolaan data keberangkatan bus secara digital, mulai dari pendaftaran hingga pencatatan jumlah penumpang.
      <br><br>
      Web ini sangat cocok digunakan oleh agen travel, perusahaan otobus (PO), maupun instansi pendidikan yang sering mengadakan kegiatan wisata. Dengan antarmuka yang sederhana namun elegan, pengelolaan jadwal bus menjadi lebih efisien dan cepat tanpa ribet.
    </p>
  </div>
</div>


  <!-- Kutipan Wisata -->
  <div class="text-center mb-5">
    <i class="bi bi-globe2 display-1 text-success"></i>
    <blockquote class="blockquote mt-3">
      <p class="mb-0">“Perjalanan bukan tentang tujuan, tetapi tentang kenangan.”</p>
      <footer class="blockquote-footer">Bus Pariwisata Indonesia</footer>
    </blockquote>
  </div>

  <!-- ✅ Formulir Ditarik ke Atas -->
  <div class="card shadow-lg mb-5" id="form">
    <div class="card-header bg-success text-white text-center">
      <h4><i class="bi bi-pencil-square"></i> Form Pendaftaran Bus</h4>
    </div>
    <div class="card-body">
      <form action="simpan.php" method="POST">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label>Nama Bus</label>
            <input type="text" class="form-control" name="nama_bus" required>
          </div>
          <div class="col-md-6 mb-3">
            <label>Tujuan Wisata</label>
            <input type="text" class="form-control" name="tujuan" required>
          </div>
          <div class="col-md-6 mb-3">
            <label>Tanggal Keberangkatan</label>
            <input type="date" class="form-control" name="tanggal" required>
          </div>
          <div class="col-md-6 mb-3">
            <label>Jumlah Penumpang</label>
            <input type="number" class="form-control" name="jumlah_penumpang" required>
          </div>
        </div>
        <button type="submit" class="btn btn-success w-100"><i class="bi bi-send"></i> Simpan Data</button>
      </form>
    </div>
  </div>

  <!-- Tabel Data -->
  <div class="card shadow-lg mb-5" id="tabel">
    <div class="card-header bg-dark text-white text-center">
      <h4><i class="bi bi-table"></i> Daftar Bus Terdaftar</h4>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Nama Bus</th>
            <th>Tujuan</th>
            <th>Tanggal</th>
            <th>Jumlah Penumpang</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $result = $koneksi->query("SELECT * FROM bus ORDER BY id DESC");
          $no = 1;
          while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$row['nama_bus']}</td>
                    <td>{$row['tujuan']}</td>
                    <td>{$row['tanggal']}</td>
                    <td>{$row['jumlah_penumpang']}</td>
                  </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

</div>

<!-- Footer -->
<footer class="text-center bg-success text-white py-3 mt-5">
  <p class="mb-0">© <?= date('Y'); ?> Bus Pariwisata. All rights reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
