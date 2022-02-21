<?php
include "config.php";
if (isset($_GET['id'])) {
    $id_transaksi = $_GET['id'];
} else {
    echo "Oops! No ID Selected";
}

if (!empty($id_transaksi) && $id_transaksi != "") {
    $hapus = mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'");
?>
    <script language="JavaScript">
        alert('Good! Delete data siswa berhasil ...');
        document.location = 'transaksi.php';
    </script>
<?php
}
?>