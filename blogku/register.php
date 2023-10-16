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

    <h2>register</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td for="username">Username:</td>
                <td><input type="text" id="username" name="username" required></td>
            </tr>
            <tr>
                <td for="email">Email:</td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td for="password">Password:</td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="singin"></td>
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
    echo $unik;
    mysqli_query($koneksi, "INSERT INTO `users`(`user_id`, `username`, `email`, `password`, `role`) VALUES ('$unik','$_POST[username]','$_POST[email]','$_POST[password]','member')");
    // echo $unik;
    // echo "berhasil";
    header("location:menu.php");
}

?>