<?php
    include "koneksi.php";

    $nama = $_POST['guestbook-name'];
    $ucapan = $_POST['guestbook-message'];
    $konfirmasi = $_POST['guestbook-confirm'];

    echo $nama;
    echo $ucapan;
    echo $konfirmasi;
    mysqli_query($koneksi,"insert into ucapan (nama, komen, konfirmasi) values('$nama','$ucapan','$konfirmasi')");

    header("location:index.php");

?>