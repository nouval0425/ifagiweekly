<?php
require "fungsi.php";

if(isset($_POST["submit"]))
{
   $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jurusan = $_POST["jurusan"];
    $email = $_POST["email"];
    $nohp = $_POST["no_hp"];
    $foto = $_POST["foto"];
   

    $query = "INSERT INTO mahasiswa
    (nama,nim,jurusan,email,no_hp,foto)
    VALUES
    ('$nama','$nim','$jurusan','$email','$nohp','$foto')";


   mysqli_query($koneksi,$query);

    if(mysqli_affected_rows($koneksi) > 0)
      {
        echo "<script>
               alert('data berhasil ditambahkan');
               window.location.href='mahasiswa.php';
               </script>
               ";
    }else{
        echo "<script>
                alert('Data gagal ditambahkan!');
                window.location.href ='mahasiswa.php'      
               </script>
               ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
             <td><a href="register.php">Register</a></td>
        </tr>
    </table>
    <br>
    <hr/>

<!-- belajar form sifatnya itu inline, perlu adanya id dan name-->
<form action="" method="POST" enctype="multipart/form-data">

<table cellpadding="5">

<tr>
    <td>Nama</td>
    <td>:</td>
    <td>
        <input type="text" name="nama" required>
    </td>
</tr>

<tr>
    <td>NIM</td>
    <td>:</td>
    <td>
        <input type="number" name="nim" required>
    </td>
</tr>

<tr>
    <td>Email</td>
    <td>:</td>
    <td>
        <input type="email" name="email" required>
    </td>
</tr>

<tr>
    <td>No HP</td>
    <td>:</td>
    <td>
        <input type="tel" name="no_hp" required>
    </td>
</tr>

<tr>
    <td>Jurusan</td>
    <td>:</td>
    <td>
        <input type="text" name ="jurusan" required>
    </td>
</tr>

<tr>
    <td>Foto</td>
    <td>:</td>
    <td>
        <input type="text" name="foto" required>
    </td>
</tr>

<tr>
    <td colspan="3">
        <button type="submit" name="submit">
            Tambah Data
        </button>
    </td>
</tr>

</table>

</form>
 

</table>
</form>
</body>
</html>