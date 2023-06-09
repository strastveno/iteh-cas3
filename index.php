<?php

require "dbBroker.php";
require "model/user.php";

session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $uname = $_POST['username'];
    $upass = $_POST['password'];
    $user_id = 1;
    //$conn = new mysqli();

    $korisnik = new User($user_id, $uname, $upass);
    //$odg = $korisnik->logInUser($uname, $upass, $conn);
    //$odg = User::logInUser($korisnik, $conn); // pristup statickim funkcijama preko klase

    $odg = User::logInUser($korisnik, $conn);
    echo json_encode($odg);

    if ($odg) {
        echo `
        <script>
        console.log("Uspesno ste se ulogovali");
        </script>
        `;
        $_SESSION['user_id'] = $korisnik->id;
        header('Location: home.php');
        exit();
    } else {
        echo `
        <script>
        console.log("Niste se ulogovali");
        </script>
        `;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>FON: Zakazivanje kolokvijuma</title>

</head>

<body>
    <div class="login-form">
        <div class="main-div">
            <form method="POST" action="#">
                <div class="container">
                    <label class="username">Korisnik</label>
                    <input type="text" name="username" class="form-control" required>
                    <br>
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" class="form-control" required>
                    <button type="submit" class="btn btn-primary" name="submit">Prijavi se</button>
                </div>

            </form>
        </div>


    </div>
</body>

</html>