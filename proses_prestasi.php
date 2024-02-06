<?php
include 'koneksi2.php';

if (isset($_POST['tambah'])) {
    $prestasi = $_POST['prestasi'];

    // Proses upload gambar
    $gambar = $_FILES['gambar'];
    $gambar_name = $gambar['name'];
    $gambar_tmp = $gambar['tmp_name'];
    $gambar_size = $gambar['size'];

    $upload_dir = 'uploads/'; // Direktori untuk menyimpan gambar

    // Generate nama unik untuk gambar
    $gambar_path = $upload_dir . uniqid() . $gambar_name;

    // Upload gambar
    move_uploaded_file($gambar_tmp, $gambar_path);

    $query = "INSERT INTO tbl_prestasi (prestasi ) VALUES ('$prestasi' )";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: admin_prestasi.php");
        exit();
    } else {
        echo "Gagal menambah sarana prasarana.";
    }
}

if (isset($_POST['edit'])) {
    $prestasi_id = $_POST['kaldik_id'];
    $prestasi = $_POST['prestasi'];

    // Periksa apakah ada file gambar yang diupload
    if ($_FILES['gambar']['name'] != '') {
        $gambar = $_FILES['gambar'];
        $gambar_name = $gambar['name'];
        $gambar_tmp = $gambar['tmp_name'];
        $gambar_size = $gambar['size'];

        $upload_dir = 'uploads/';

        // Generate nama unik untuk gambar
        $gambar_path = $upload_dir . uniqid() . $gambar_name;

        // Upload gambar baru
        move_uploaded_file($gambar_tmp, $gambar_path);

        // Hapus gambar lama dari server
        $old_image_path_query = "SELECT foto FROM tbl_prestasi WHERE id = $prestasi_id";
        $old_image_path_result = mysqli_query($conn, $old_image_path_query);

        if ($old_image_path_result) {
            $old_image_path = mysqli_fetch_assoc($old_image_path_result)['foto'];
            unlink($old_image_path);
        }
    } else {
        // Jika tidak ada upload gambar baru, gunakan gambar lama
        $gambar_path_query = "SELECT foto FROM tbl_prestasi WHERE id = $prestasi_id";
        $gambar_path_result = mysqli_query($conn, $gambar_path_query);

        if ($gambar_path_result) {
            $gambar_path = mysqli_fetch_assoc($gambar_path_result)['foto'];
        }
    }

    $query = "UPDATE tbl_prestasi SET prestasi='$prestasi' WHERE id=$prestasi_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: admin_prestasi.php");
        exit();
    } else {
        echo "Gagal mengedit prestasi siswa.";
    }
}

if (isset($_GET['hapus_id'])) {
    $prestasi_id = $_GET['hapus_id'];

    $image_path_query = "SELECT foto FROM tbl_prestasi WHERE id = $prestasi_id";

    if ($image_path_result) {
        $image_path = mysqli_fetch_assoc($image_path_result)['foto'];

        // Hapus gambar dari server
        unlink($image_path);
    }

    $delete_query = "DELETE FROM tbl_prestasi WHERE id=$prestasi_id";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
        header("Location: admin_prestasi.php");
        exit();
    } else {
        echo "Gagal menghapus berita.";
    }
}

mysqli_close($conn);
?>
