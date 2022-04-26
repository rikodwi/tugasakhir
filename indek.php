<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "web");

//ambil data dari tabel
$result = mysqli_query($koneksi, "SELECT * FROM admin");

// ambil data (fetch) dari object result
// mysqli_fetch_row(); // mengembalikan array numerik
// mysqli_fetch_assoc(); // mengembalikan array assosiatif
// mysqli_fetch_array(); // mengembalikan array numerik & array assosiatif
// mysqli_fetch_object(); // mengembalikan sebuah object

/*
while ($adm = mysqli_fetch_assoc($result)){
var_dump($adm [2]);
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN ADMIN</title>
</head>
<body>
    <h1>daftar admin</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id_admin</th>
            <th>nama</th>
            <th>username</th>
            <th>pasword</th>
            <th>alamat</th>
        </tr>
        <?php
while ($row = mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td><?= $row['id_admin'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['pasword'] ?></td>
            <td><?= $row['alamat'] ?></td>

        </tr>
<?php
endwhile 
?>
    </table>
</body>
</html>