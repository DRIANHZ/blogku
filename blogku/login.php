<!-- <?php
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

if(isset($_POST['submit'])){

    if($_POST['username'] == 'ADMIN' &&
    $_POST['password'] == 'ADMIN'
    ){
        header('location:admin.php');
    }else{
        $cek = mysqli_query($koneksi,"SELECT * FROM `users` WHERE username = '$_POST[username]' AND password = '$_POST[password]'");
        if(!isset($cek)){
            header("location:login.php");
            echo "password atau nama mungkin slalah";
        }
        header('location:menu.php');
    }
}


?> -->