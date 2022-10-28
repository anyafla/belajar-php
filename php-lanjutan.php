
<?php

$nama ="anyafla";

/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
*/

/*
$no = 10;
for ($i=0 ; $i<$no ; $i++) {
    $n = $i+1;
    echo $n." ".$nama."<br/>";
}
*/

/*
$no = 15;
$i = 0;
while ($i<$no) {
    $n = $i+1;
    echo $n." ".$nama."<br/>";
    $i++; 
}
*/

//Percabangan//

/*
if ($nama== "anyafla") {
    echo $nama." adalah kesayangan rifky";
} else if($nama =="achmads") {
    echo $nama." tetangga kesayangan anya";
}
else {
    echo $nama." kamu kesayangannya siapa?";
}
*/

/*
switch($nama) {
    case "anyafla";
    $pesan = $nama." si paling cantik paripurna";
    break;
    case "anyo";
    $pesan = $nama." si paling unyu";
    break;
    default:
    $pesan = $nama." kamu si paling yaolo yaolo ya?";
}
echo $pesan;
*/



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Perulangan</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label>Nama</label>
    <input type="text" name="nama">
    <label>Jumlah</label>
    <input type="text" name="no">
    <input type="submit" name="submit" value="Submit">

    </form>
    <?php
    if(!empty($_POST['submit'])) {

        switch($_POST['nama']) {
            case "anyafla";
            $pesan = $_POST['nama']." si paling cantik paripurna";
            break;
            case "anyo";
            $pesan = $_POST['nama']." si paling unyu";
            break;
            default:
            $pesan = $_POST['nama']." kamu si paling yaolo yaolo ya?";
        }
        for ($i=0;$i<$_POST['no']; $i++) {
        echo $pesan."<br>";
        }

    } 
    
    else {
        echo "Anda belum input nama dan jumlah";
    }


    ?>
</body>
</html>