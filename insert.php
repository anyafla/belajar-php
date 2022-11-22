<?php

//tangkap data dari form submit
if (isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $id_jurusan = $_POST['id_jurusan'];
    $tpt_lahir = $_POST['tpt_lahir'];
    $gender = $_POST['gender'];

    // 1. buat koneksi dengan mysql
$con = mysqli_connect("localhost", "root", "", "fakultas");

// 2. check connection
if (mysqli_connect_errno()) {
    echo "Koneksi gagal" . mysqli_connect_error();
    exit();
}
else {
    echo "Koneksi berhasil";
}

//buat sql query untuk insert ke database
//buat query insert dan jalankan
$sql ="insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir) 
        values ($id_jurusan, '$nim', '$nama', '$gender', '$tpt_lahir')";

//jalankan query
if (mysqli_query($con, $sql)){
    echo "Berhasil menambahkan data";
} else{
    echo "Error :" . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <form action="insert.php" method="post">
        NIM : <input type="text" name="nim"><br>
        Nama : <input type="text" name="nama"><br>
        ID Jurusan : <input type="number" name="id_jurusan"><br>
        Jenis Kelamin : <input type="text" name="gender"><br>
        Tempat Lahir : <input type="text" name="tpt_lahir"><br>
        <button type="submit" name="submit">Tambah Data</button>
</form>
</body>
</html>