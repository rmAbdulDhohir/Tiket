<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
<?php
        include 'koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM form ORDER BY id_tiket DESC LIMIT 1");
        $data = mysqli_fetch_array($query);
?> 
<div class="container">
<center><h3>Data Pemesanan</h3> 
    
    <table class="table-form" border="1" width="456" height="400" cellpadding="5" cellspacing="0">
        <tr>
            <td width="55%">Nama Lengkap</td>
            <td width="1%">:</td>
            <td><?php echo $data['nama_lengkap']; ?></td>
        </tr>
        <tr>
            <td>Nomer Identitas</td>
            <td width="1%">:</td>
            <td><?php echo $data['nomer_identitas']; ?></td>
        </tr>
        <tr> 
            <td>No HP</td>
            <td width="1%">:</td>
            <td><?php echo $data['no_hp']; ?></td>
        </tr>
        <tr>
            <td>Tempat Wisata</td>
            <td width="1%">:</td>
            <td><?php echo $data['tempat_wisata']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Kunjungan</td>
            <td width="1%">:</td>
            <td><?php echo $data['tanggal_kunjungan']; ?></td>
        </tr>
        <tr> 
            <td>Jumlah Pengunjung Dewasa</td>
            <td width="1%">:</td>
            <td><?php echo $data['pengunjung_dewasa']; ?></td>
        </tr>
        <tr>
            <td>Jumlah Pengunjung Anak-Anak</td>
            <td width="1%">:</td>
           <td><?php echo $data['pengunjung_anak']; ?></td>
        </tr>
        <tr>
            <td>Harga Tiket</td>
            <td width="1%">:</td>
           <td><?php echo $data['harga_tiket']; ?></td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td width="1%">:</td>
           <td><?php echo $data['total_bayar']; ?></td>
        </tr>
        </center>
     </table>
     <br>
     <a href="index.php" target="_blank" class="btn btn-secondary">Home</a>
     <a href="form.php?id=<?=$data['id_tiket']?>" class="btn btn-secondary">Edit</a>
    <a href="cetak.php" target="_blank" class="btn btn-secondary">Cetak</a>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


