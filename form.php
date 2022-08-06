<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>
<?php
        include 'navbar.php';
        include 'koneksi.php';

        if(@$_GET['id']){
            $id_tiket = $_GET['id'];
            $query = mysqli_query($koneksi, "SELECT*FROM form WHERE id_tiket ='$id_tiket'");
            $form = mysqli_fetch_array($query);
        } else {
            $form['tempat_wisata'] = '';
        }
    ?>
<div class="container col-sm-8">
<form action="action-pesan.php" METHOD="POST">

<label class="col-sm-8 mb-4" ><h1>Form Pemesanan</h1></label>
    <div class="from-group row mb-4">
        <label for="nama_lengkap" class="col-sm-3">Nama Lengkap</label>
            <div class="col-sm-8">
                <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?=@$form['nama_lengkap']?>" class="form-control" required> 
            </div>        
    </div>
    <div class="from-group row mb-4">
        <label for="no_identitas" class="col-sm-3">Nomer Identitas</label>
            <div class="col-sm-8">
                <input type="text" id="no_identitas"  name="no_identitas" value="<?=@$form['nomer_identitas']?>" class="form-control" required> 
            </div>        
    </div>
    <div class="from-group row mb-4">
        <label for="no_hp" class="col-sm-3">No HP</label>
            <div class="col-sm-8">
                <input type="text" id="no_hp" name="no_hp" value="<?=@$form['no_hp']?>" class="form-control" required> 
            </div>        
    </div>
    <div class="from-group row mb-4">
        <label  class="col-sm-3">Tempat Wisata</label>
            <div class="col-sm-8">
                <select id="pasar" class="form-select" name="tempat_wisata" onchange="myFunction(event)" aria-label="Default select example">
                    <option <?php if ($form['tempat_wisata'] == '') { echo 'selected'; }?>>Pilih Tempat Wisata</option>
                    <option value="pasar gede" <?php if ($form['tempat_wisata'] == 'pasar gede') { echo 'selected'; }?>>pasar gede</option>
                    <option value="pasar klewer" <?php if ($form['tempat_wisata'] == 'pasar klewer') { echo 'selected'; }?>>pasar klewer</option>
                    <option value="pasar nusukan" <?php if ($form['tempat_wisata'] == 'pasar nusukan') { echo 'selected'; }?>>pasar nusukan</option>
                    
                </select>
            </div>        
    </div>
    <div class="from-group row mb-4">
        <label for="tanggal_kunjungan" class="col-sm-3">Tanggal Kunjungan</label>
            <div class="col-sm-8">
                <input type="date" id="tanggal_kunjungan" name="tanggal_kunjungan" value="<?=@$form['tanggal_kunjungan']?>" class="form-control" required> 
            </div>        
    </div>
    <div class="from-group row mb-4">
        <label for="pengunjung_dewasa" class="col-sm-3">Pengunjung Dewasa</label>
            <div class="col-sm-8">
                <input type="text" id="pengunjung_dewasa" name="pengunjung_dewasa" value="<?=@$form['pengunjung_dewasa']?>" class="form-control"> 
            </div>        
    </div>
    <div class="from-group row mb-4">
        <label for="pengunjung_anak" class="col-sm-3">Pengunjung Anak-Anak <br><p class="small">usia dibawah 12 tahun</p></label>
            <div class="col-sm-8">
                <input type="text" id="pengunjung_anak" name="pengunjung_anak" value="<?=@$form['pengunjung_anak']?>" class="form-control"> 
            </div>        
    </div>
    <div class="form-group mb-3 row">
        <label for="harga_tiket" class="col-sm-3 col-form-label">Harga Tiket</label>
            <div class="col-sm-8">
                <input id="hargaTiket" type="text" readonly class="form-control-plaintext" value="<?=@$form['harga_tiket']?>" id="harga_tiket"  name="harga_tiket" value="">
            </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="total_bayar" class="col-sm-3 col-form-label">Total Bayar</label>
            <div class="col-sm-8">
                
                <input  type="text" readonly class="form-control-plaintext" id="total_bayar" value="<?=@$form['total_bayar']?>" name="total_bayar" value="">
            </div>
    </div>
    <div>
        <input type="checkbox" id="vehicle1" name="vehicle1" value="" required>
        <label class="small">Saya dan/atau rombongan telah membaca, memahami,setuju berdasarkan ketentuan dan syarat yang sudah ditetapkan</label>

    </div>
         
    <div class="form-group mt-4 text-center">
        <a onClick="hitung()" name="hitung()" class="btn btn-primary">Hitung Total Bayar</a>
        <button type="submit" class="btn btn-success mx-4 ">Pesan Tiket</button>
        <a href="form.php" name="reset" value="reset" class="btn btn-danger">Cancel</a>
    </div>
</div>
 </form>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">

function myFunction(e) {
    let pasar = e.target.value
    var nilai = 0
    if (pasar == 'pasar nusukan'){
        nilai = 7000        
    } else if(pasar == 'pasar gede' ) {
        nilai = 10000
    } else if (pasar == 'pasar klewer') {
        nilai = 12000
    }
    document.getElementById("hargaTiket").value = nilai
}

function hitung(clicked) {
    var harga_dewasa = document.getElementById("pengunjung_dewasa").value * document.getElementById("hargaTiket").value          
    var harga_anak = document.getElementById("pengunjung_anak").value * document.getElementById("hargaTiket").value
    var diskon = 0.5 * harga_anak;
	var	hargaDiskonAnak = harga_anak - diskon;

    var total = hargaDiskonAnak+harga_dewasa  
    document.getElementById("total_bayar").value = total
}  

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>