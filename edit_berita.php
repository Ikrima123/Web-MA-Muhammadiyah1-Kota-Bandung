<?php
function cleanInput($data)
{
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars($data));
}

include 'koneksi2.php';

// Edit Berita
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    echo "ID Berita yang diedit: " . $edit_id; // Tambahkan ini untuk debugging

    // Query untuk mengambil data berita yang akan diubah
    $query = "SELECT * FROM tbl_news WHERE id = $edit_id";
    $result = mysqli_query($conn, $query);

    // ... (lanjutan kode)
}


    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $judul = $row['judul'];
        $deskripsi = $row['deskripsi'];
    } else {
        echo "Gagal mengambil data berita untuk diedit: " . mysqli_error($conn);
    }
// Setelah pengguna mengedit dan mengirim formulir
if (isset($_POST['edit_submit'])) {
    $judul_baru = cleanInput($_POST['judul']);
    $deskripsi_baru = cleanInput($_POST['deskripsi']);

    // Query untuk mengedit berita di database
    $query_edit = "UPDATE tbl_news SET judul='$judul_baru', deskripsi='$deskripsi_baru' WHERE id=$edit_id";
    $result_edit = mysqli_query($conn, $query_edit);

    if ($result_edit) {
        header("Location: admin.php"); // Redirect kembali ke halaman admin setelah pengeditan berhasil
    } else {
        echo "Gagal mengedit berita: " . mysqli_error($conn);
    }
}
?>
