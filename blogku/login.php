<?php
include "koneksi.php";
// echo $s;
// die();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Form Login</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td for="username">Username:</td>
                <td><input type="text" id="username" name="username" required></td>
            </tr>
            <tr>
                <td for="password">Password:</td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="login"></td>
            </tr>
        </table>
    </form>

</body>

</html>
<?php


$uniqueString = uniqid();
$unik = crc32($uniqueString);
if (isset($_POST['submit'])) {
    // $unik = uniqid(integer);
    $kondisi1 = mysqli_query($koneksi, "SELECT `username` FROM `users` WHERE `username` = '$_POST[username]'");

    // echo isset($kondisi1);
    // if(isset($kondisi1)){
    //     echo "berhasil";
    // }//else{
    //     echo "password atau username yang anda input mungkin salah";
    // }

    // header("location:register.php");
    // echo $unik;
    // echo "berhasil";
}

?>