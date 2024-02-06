<?php
include 'koneksi2.php';

if (isset($_POST['tambah'])) {

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

    $query = "INSERT INTO tbl_gallery (foto ) VALUES ('$gambar_path')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: admin_gallery.php");
        exit();
    } else {
        echo "Gagal menambah foto.";
    }
}


if (isset($_GET['hapus_id'])) {
    $gallery_id = $_GET['hapus_id'];

    $image_path_query = "SELECT foto FROM tbl_gallery WHERE id = $gallery_id";
    $image_path_result = mysqli_query($conn, $image_path_query);

    if ($image_path_result) {
        $image_path = mysqli_fetch_assoc($image_path_result)['foto'];

        // Hapus gambar dari server
        unlink($image_path);
    }

    $delete_query = "DELETE FROM tbl_gallery WHERE id=$gallery_id";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
        header("Location: admin_gallery.php");
        exit();
    } else {
        echo "Gagal menghapus foto.";
    }
}

mysqli_close($conn);
?>
