<?php 
    if (isset($_GET['kirim'])) {
    $nama       = $_GET['nama'] ;
    $pesan    = $_GET['pesan'];
    $noHp      = 6285214990130;
    header("location:https://api.whatsapp.com/send?phone=$noHp&text=hallo ini %20$nama%20,%20$pesan");
    } 

?>