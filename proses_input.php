<?php
include 'config.php';
//panggil data post
$id_transaksi = $_POST['id_transaksi'];
$day = $_POST['hari'];
$month = $_POST['bulan'];
$year = $_POST['tahun'];
$nama_customer = $_POST['id_customer'];
$nama_kasir = $_POST['id_kasir'];
$kategori = $_POST['id_kategori'];
$berat = $_POST['berat'];
$biaya_jasa = $_POST['biaya_jasa'];

$tanggal_transaksi = $year . '-' . $month . '-' . $day;

//masukan database
mysqli_query($conn, "INSERT INTO transaksi VALUES('" . $id_transaksi . "',
                                                    '" . $tanggal_transaksi . "',
                                                    '" . $nama_customer . "',
                                                    '" . $nama_kasir . "',
                                                    '" . $kategori . "',
                                                    '" . $berat . "',
                                                    '" . $biaya_jasa . "')");
header("location:transaksi.php?pesan=input");
//var_dump($query); die;
