<!DOCTYPE html>
<html>
<head>
    <title>Tugas String dan Tanggal</title>
</head>
<body>

<form method="post">
    Masukkan Nama, Email dan Password <br>
    Default Nama: <b>Belajar_web</b>, Email: <b>test@gmail.com</b>, Password: <b>M4d1un</b>
 <br>  
  
    Isian data:<br>
    Nama: <input type="text" name="nama"><br>
    Email: <input type="text" name="email"><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="cek" value="Cek">
</form>

<?php
if (isset($_POST['cek'])) {

    $nama     = $_POST['nama'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    
    if (empty($email)) {
        echo "Harap mengisi email <br>";
    } else {
        if (preg_match("/test@gmail.com/", $email)) {
            echo "Alamat email valid <br>";
        } else {
            echo "Alamat email tidak valid <br>";
        }
    }

    $salt = "belajar"; 
    $pass_valid = crypt("madiun", $salt);
    $enkripsi   = crypt($password, $salt);

    if ($pass_valid === $enkripsi) {
        echo "Password valid <br>";
    } else {
        echo "Password salah <br>";
    }

    echo "Tanggal akses: " . date("d-m-Y H:i:s");
}
?>

</body>
</html>
