<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <H1>DATA Mahasiswa</H1>
    
    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>
    <br>
    <hr/>
    <h2>Data Mahasiswa</h2>

    <a href="ambahData.php">
        <button>Tambah Data</button>
    </a>
    
    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
            <th>No</th>
            <th>nama</th>
             <th>NIM</th>
            <th>Jurusan</th>
             <th>Email</th>
            <th>No. HP</th>
            <th>foto</th>
            <th>aksi</th>
           
        </tr>
        <tr>
            <td>0</td>
            <td>wahyuddin</td>
            <td>13182420050</td>
            <td>Informatika</td>
            <td>ghifarynopal@gmail.com</td>
            <td>085175104116</td>
            <td><img src="assets/images/suzy.jpg" width ="80px" alt=""></td>
            <td><a href="editdata.php"><button>Edit</button></a>
            <a href="deletedata.php"><button>Delete</button></a></td>
        </tr>
    
    </table>
    <br><br>

    <table border="1" cellspacing="0" cellpadding="10px"> 
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td colspan="2" rowspan="2" align="center" >?</td>
            <td>2,4</td>
        </tr>
        <tr>
            <td>3,1</td>        
          <td>3,4</td>
        </tr>
        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>
    </table>
</body>
</html>