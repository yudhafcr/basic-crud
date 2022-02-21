<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="asset/template/css/bootstrap.min.css">


</head>

<body>
    <div class="container-fluid">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img class="rounded-circle" style="max-width: 100px;" src="asset/gambar/logo.jfif" alt=""></a>

        </nav>


        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
            }
        }
        ?>

        <div class="container">
            <main class="form-signin">
                <form action="cek_login.php" method="post">
                    <h1 class="h3 mb-3 fw-normal">sign in</h1>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="username" name="username">

                    </div>
                    <br>
                    <!-- <label for="Level"> Level</label>
            <div class="form-group">
                <select name="id_user" class="form-control">
                    <option value="1">admin</option>
                    <option value="2">user</option>
                </select>
            </div> -->
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
            </main>
        </div>
        <?php include("footer.php"); ?>