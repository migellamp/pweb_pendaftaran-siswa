<?php

$server = "localhost";
$user = "migellam_user";
$password = "databaseuser";
$nama_database = "migellam_pendaftaran-siswa-new";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

mysqli_close($conn);
?>
