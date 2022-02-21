<?php include("navbar.php"); ?>
<?php
include_once("config.php");
?>
<div class="container">
    <form action="proses_input.php" method="post">

        <div class="form-group">
            <label for="formGroupExampleInput">ID Transaksi</label>
            <input type="text" class="form-control" name="id_transaksi">
        </div>

        <label for="">Tanggal Transaksi</label>
        <div class="form-row">
            <div class="col">
                <select name="hari" class="form-control" aria-placeholder="hari">
                    <?php
                    for ($tgl = 1; $tgl <= 31; $tgl++) {
                    ?>
                        <option value="<?= $tgl; ?>"><?= $tgl; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col">
                <select name="bulan" class="form-control" aria-placeholder="Bulan">
                    <?php
                    $data_bln = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    for ($bln = 1; $bln <= 12; $bln++) {
                    ?>
                        <option value="<?= $bln; ?>"><?= $data_bln[$bln - 1]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="tahun" placeholder="Tahun">
            </div>
        </div>


        <div class="form-group">
            <?php
            $data = mysqli_query($conn, "SELECT * FROM customer");
            ?>
            <label for="id_customer">nama customer</label>
            <select name="id_customer" class="form-control">
                <?php
                while ($query = mysqli_fetch_array($data)) {
                ?>
                    <option value="<?= $query['id_customer']; ?>">
                        <?= $query['nama_customer']; ?>

                    </option>
                <?php
                }
                ?>
            </select>
        </div>


        <div class="form-group">
            <?php
            $data = mysqli_query($conn, "SELECT * FROM kasir");
            ?>
            <label for="id_kasir">nama kasir</label>
            <select name="id_kasir" class="form-control">
                <?php
                while ($query = mysqli_fetch_array($data)) {
                ?>
                    <option value="<?= $query['id_kasir']; ?>">
                        <?= $query['nama_kasir']; ?>

                    </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <?php
            $data = mysqli_query($conn, "SELECT * FROM kategori");
            ?>
            <label for="id_kategori">Kategori</label>
            <select name="id_kategori" class="form-control">
                <?php
                while ($query = mysqli_fetch_array($data)) {
                ?>
                    <option value="<?= $query['id_kategori']; ?>">
                        <?= $query['kategori']; ?>

                    </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Berat</label>
            <input type="text" class="form-control" name="berat">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Biaya Jasa</label>
            <input type="text" class="form-control" name="biaya_jasa">
        </div>

        <br>
        <button type="submit" class="btn btn-primary" name="submit">submit</button>
    </form>
</div>
<?php include("footer.php"); ?>