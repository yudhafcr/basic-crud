<?php include("navbar.php"); ?>
<main role="main">

    <?php
    // Create database connection using config file
    include_once("config.php");


    ?>
    <div class="container-fluid">
        <div class="col">
            <h1> kategori </h1>
            <a class="btn btn-success float-right " href="input_kategori.php"> tambah data</a>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope=" col">Id kategori</th>
                        <th scope="col">kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $qr_service = mysqli_query($conn, "SELECT * FROM kategori
                        order by id_kategori asc");

                    while ($data = mysqli_fetch_array($qr_service)) {
                    ?>

                        <tr>
                            <td><?= $data['id_kategori']; ?></td>
                            <td><?= $data['kategori']; ?></td>
                            <td><a type="button" class="btn btn-warning" href="edit_pelanggan.php?id=<?= $data['id_pelanggan'] ?>">Edit</a>
                                <a type="button" class="btn btn-danger" href="proses_hapus.php?id=<?= $data['id_pelanggan'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>


                </tbody>
            </table>
        </div>
    </div>



</main>
<?php include("footer.php"); ?>