<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kelola Tentang kami</title>
    <!-- Tambahkan link CSS Bootstrap jika diperlukan -->
    <link rel="stylesheet" href="./CSS/style2.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- End Bootstrap CSS -->

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
</head>

<body>

 <!--Header Start-->
 <header>
         <section id="topbar" class="mb-2 mb-lg-0 mb-sm-0 d-none d-lg-flex align-items-center pt-2 pb-2 bg-primary text-white topbar-transparent">
        <div class="container">
          <div class="row">
            <div class="col-lg-6   text-start">
             <span class="px-3"><i class="bi bi-phone "></i> (022)5202778 </span>
          <i class="bi bi-clock"></i> Mon-Sat: 7 AM - 5 PM
            </div>
            <div class="col-md-6 text-end">
                <a href="https://www.facebook.com/pesantrenmuhammadiyah.tegallega" class="me-4 text-reset" target="_blank">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="me-4 text-reset" target="_blank">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="https://www.instagram.com/ma_muhammadiyah1bandung?igsh=MTM5NTN1eWNzdWJ4cg==" class="me-4 text-reset" target="_blank">
                    <i class="bi bi-instagram"></i>
                </a>
            </div>
          </div>
        </div>
      </section>
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-ornflowerblue bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0">MA MUHAMMADIYAH</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                            <a class="nav-link" href="admin_news.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Tentang Kami
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="admin_datapengajar.php">Data Pengajar</a></li>
                              <li><a class="dropdown-item" href="admin_sarana.php">Sarana Prasarana</a></li>
                              <li><a class="dropdown-item" href="admin_kaldik.php">Kalender Akademik</a></li>
                              <li><a class="dropdown-item" href="admin_prestasi.php">Prestasi Siswa</a></li>
                            </ul>
                          </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 action-menu">
                        <li class="nav-item">
                            <a class="nav-link " href="login.html">
                                <i class="bi bi-person "></i>Logout
                            </a>
                        </li>
                    </ul>   
                </div>
            </div>
        </nav>
        <!--Navbar End-->

    <h2>Kelola Data Pengajar</h2>

    <!-- Form untuk menambah atau mengedit berita -->
   <!-- Form untuk menambah atau mengedit berita -->
<form action="proses_datapengajar.php" method="post" enctype="multipart/form-data">

    <label for="gambar">Pilih Gambar (Maksimal 2cm):</label>
    <input type="file" name="gambar" accept="image/*">
    <label for="nama_pengajar">Nama pengajar:</label>
    <input type="text" name="namapengajar" required>
    <br>
    <br>

    <input type="hidden" name="pengajar_id" value="0">
    <!-- Gunakan hidden input untuk menyimpan ID berita yang akan diubah -->

    <button type="submit" name="tambah">Tambah Data Pengajar</button>
</form>

    <!-- Daftar berita yang sudah ada -->
    <h3>Data Pengajar</h3>
    <table border="1" cellpadding="5">
        <tr>
            <th>Foto</th>
            <th>Nama Pengajar</th>
            <th>Aksi</th>
        </tr>

        <!-- Tampilkan daftar berita dari database -->
        <?php
        // Lakukan koneksi ke database (pastikan sudah diatur di file koneksi2.php)
        include 'koneksi2.php';

        // Query untuk mengambil data berita dari tabel di database
        $query = "SELECT * FROM tbl_pengajar";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Ambil data satu per satu dan tampilkan
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><img src='{$row['foto']}' alt='Gambar Berita' width='200'></td>";
                echo "<td><h6>{$row['namapengajar']}</h6></td>";
                echo "<td><a href='proses_datapengajar.php?hapus_id={$row['id']}'>Hapus</a> | ";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Gagal mengambil data dari database.</td></tr>";
        }

        // Tutup koneksi ke database
        mysqli_close($conn);
        ?>
    </table>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>

</html>