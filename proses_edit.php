<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['submit'])) {

    // ambil data dari formulir

    $id_transaksi = $_POST['id_transaksi'];
    $id_customer = $_POST['id_customer'];
    $id_kasir = $_POST['id_kasir'];
    $kategori = $_POST['id_kategori'];
    $berat = $_POST['berat'];
    $biaya_jasa = $_POST['biaya_jasa'];

    $day = $_POST['hari'];
    $month = $_POST['bulan'];
    $year = $_POST['tahun'];
    $tanggal_transaksi = $year . '-' . $month . '-' . $day;


    // buat query update
    $sql = "UPDATE transaksi SET id_transaksi='" . $id_transaksi . "', 
                                tanggal_transaksi='" . $tanggal_transaksi . "', 
                                id_customer='" . $id_customer . "', 
                                id_kasir='" . $id_kasir . "',
                                id_kategori='" . $kategori . "',
                                berat='" . $berat . "',
                                biaya_jasa='" . $biaya_jasa . "' WHERE id_transaksi = $id_transaksi ";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman data_pelanggan.php
        header('Location: transaksi.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
