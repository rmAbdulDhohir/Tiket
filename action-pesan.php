<?php

    include 'koneksi.php';
    $nama_lengkap      = $_POST['nama_lengkap'];
    $nomer_identitas   = $_POST['no_identitas'];
    $no_hp             = $_POST['no_hp'];
    $tempat_wisata     = $_POST['tempat_wisata'];
    $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
    $pengunjung_dewasa = $_POST['pengunjung_dewasa'];
    $pengunjung_anak   = $_POST['pengunjung_anak'];
    $harga_tiket       = $_POST['harga_tiket'];
    $total_bayar       = $_POST['total_bayar'];

    print_r($_POST);
    if(@$id_tiket){
        $query = "UPDATE form SET
            
            nama_lengkap        = '$nama_lengkap',
            nomer_identitas     = '$nomer_identitas',
            no_hp               = '$no_hp',
            tempat_wisata       = '$tempat_wisata',
            tanggal_kunjungan   = '$tanggal_kunjungan',
            pengunjung_dewasa   = '$pengunjung_dewasa',
            pengunjung_anak     = '$pengunjung_anak ',
            harga_tiket         = '$harga_tiket',
            total_bayar         = '$total_bayar'            
            WHERE id_tiket      = '$id_tiket'";
            
            mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));

    }
    else{
        $query = "INSERT INTO form (nama_lengkap, nomer_identitas, no_hp, tempat_wisata, tanggal_kunjungan, pengunjung_dewasa, pengunjung_anak, harga_tiket, total_bayar) 
        VALUES
        ('$nama_lengkap','$nomer_identitas','$no_hp','$tempat_wisata','$tanggal_kunjungan','$pengunjung_dewasa','$pengunjung_anak ','$harga_tiket ','$total_bayar')";
        mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));

    }

    
    header('Location:data-pemesanan.php');

?>