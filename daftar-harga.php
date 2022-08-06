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
        include 'navbar.php';

    ?>

    <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Wisata</th>
            <th scope="col">Alamat Wisata</th>
            <th scope="col">Harga</th>
            </tr>
        </thead>

        <?php
            include 'koneksi.php';

            $wisata = mysqli_query($koneksi, 'SELECT * FROM wisata');
            $no=1;
            foreach($wisata as $key => $value){

        ?>

        <tbody>
            
            <tr>
                <td><?=$no?></td>
                <td><?=$value['nama_wisata']?></td>
                <td><?=$value['alamat_wisata']?></td>
                <td><?=$value['harga']?></td>
            </tr>
        </tbody>

        <?php
            $no++;
        };

        ?>
    </table>
    

    </div>
    

<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>