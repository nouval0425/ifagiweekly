<?php

    require 'fungsi.php';

    if(isset($_POST["register"]))
         if(register($_POST) > 0)
        {
             echo "<script>
               alert('user berhasil dibuat');
               window.location.href='login.php';
               </script>
               ";
        }
        else{
            echo "<script>
                alert('User Gagal Dibuat');
                window.location.href ='index.php'      
               </script>
               ";
        }
         
    function register($data)
    {
        global $koneksi;

        $username = stripcslashes($data["username"]);
        $password1 = mysqli_real_escape_string($koneksi,$data
        ["password"]);
        $password2 = mysqli_real_escape_string($koneksi,$data
        ["password2"]);

    
        if($password1 != $password2)
            {
                echo "<script>
                alert('confirmation password not be able');
                window.location.href ='register.php'      
               </script>
               ";
               return false;
            }
        $password_hash = password_hash($password1, PASSWORD_DEFAULT);

        $query = "INSERT INTO user(username,password) VALUES
        ('$username','$password_hash')";

        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi);

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<body>
    <h1>Register</h1>
    <hr>
    <form action="" method="post">
        <label for="username">username : </label><br>
        <input type="text" name="username" required>
        <br>
        <label for="password">password : </label><br>
        <input type="password" name="password" required>
        <br>
        <label for="konfirmasi">Konfirmasi Password</label><br>
        <input type="password" name="password2" required>
        <br>
        <button type="submit" name="register">Register</button>

    </form>
</body>
</html>