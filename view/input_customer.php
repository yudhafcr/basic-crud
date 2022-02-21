<?php include("navbar.php"); ?>
<div class="container">
    <form action="proses_input.php" method="post">

        <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" name="nama_pelanggan">
        </div>

        <div class="form-group col-md-6">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option selected value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>

        <div class="form-row">

            <label>Kabupaten/kota</label>
            <input type="text" class="form-control" name="alamat" required>


            <div class="col-md-6">
                <label for="validationCustom05">tanggal lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" required>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">submit</button>
    </form>
</div>
<?php include("footer.php"); ?>