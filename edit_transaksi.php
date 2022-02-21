<?php include("navbar.php"); ?>
<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: transaksi.php');
}

$id_transaksi = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_transaksi = '" . $id_transaksi . "' ");
while ($data = mysqli_fetch_array($query)) {

    $berat = $data['berat'];
    $biaya_jasa = $data['biaya_jasa'];
    $id_customer = $data['id_customer'];
    $id_kasir = $data['id_kasir'];
    $id_kategori = $data['id_kategori'];
    $tanggal_transaksi = $data['tanggal_transaksi'];
    $tgl_trs = explode("-", $tanggal_transaksi);
}


//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM transaksi WHERE id_transaksi=$id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<div class="container">
    <form action="../../controller/proses_edit.php" method="post">

        <div class="form-group">
            <label for="formGroupExampleInput">ID Transaksi</label>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <input type="text" class="form-control" name="id_transaksi" value="<?php echo $data['id_transaksi'] ?>">
        </div>

        <label for="">Tanggal Transaksi</label>
        <div class="form-row">
            <div class="col">
                <select name="hari" class="form-control" aria-placeholder="hari">
                    <?php
                    for ($tgl = 1; $tgl <= 31; $tgl++) {
                        if ($tgl_trs[2] == $tgl) {
                            $slc_tgl = 'selected';
                        } else {
                            $slc_tgl = '';
                        }
                    ?>
                        <option <?= $slc_tgl; ?> value="<?= $tgl; ?>"><?= $tgl; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col">
                <select name="bulan" id="" class="form-control">
                    <?php
                    $data_bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    for ($bln = 1; $bln <= 12; $bln++) {
                        if ($tgl_trs[1] == $bln) {
                            $slc_bln = 'selected';
                        } else {
                            $slc_bln = '';
                        }
                    ?>
                        <option <?= $slc_bln; ?> value="<?= $bln; ?>"><?= $data_bulan[$bln - 1]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="tahun" value="<?= $tgl_trs[0]; ?>" <?= $tgl_trs[0]; ?>>
            </div>
        </div>



        <div class="form-group">
            <label for="">Nama Customer</label>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM customer");
            ?>
            <select name="id_customer" class="form-control">
                <?php
                while ($data = mysqli_fetch_array($query)) {
                    if ($id_customer == $data['id_customer']) {
                        $select = 'selected';
                    } else {
                        $select = '';
                    }

                ?>
                    <option <?= $select; ?> value="<?= $data['id_customer']; ?>">
                        <?= $data['nama_customer']; ?>

                    </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="">Nama kasir</label>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM kasir");
            ?>
            <select name="id_kasir" class="form-control">
                <?php
                while ($data = mysqli_fetch_array($query)) {
                    if ($id_kasir == $data['id_kasir']) {
                        $select = 'selected';
                    } else {
                        $select = '';
                    }
                ?>
                    <option <?= $select; ?> value="<?= $data['id_kasir']; ?>">
                        <?= $data['nama_kasir']; ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="">Nama Ketegori</label>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM kategori");
            ?>
            <select name="id_kategori" class="form-control">
                <?php
                while ($data = mysqli_fetch_array($query)) {
                    if ($id_kategori == $data['id_kategori']) {
                        $select = 'selected';
                    } else {
                        $select = '';
                    }
                ?>
                    <option <?= $select; ?> value="<?= $data['id_kategori']; ?>">
                        <?= $data['kategori']; ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>


        <div class="form-group">
            <label for="formGroupExampleInput">Berat</label>
            <input type="text" class="form-control" name="berat" value="<?= $berat ?>">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Biaya Jasa</label>
            <input class="form-control" type="number" name="biaya_jasa" value="<?= $biaya_jasa; ?>">
        </div>

        <br>
        <button type="submit" class="btn btn-primary" name="submit">submit</button>
    </form>
</div>
<?php include("footer.php"); ?>