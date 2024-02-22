<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman pembayaran spp</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient( rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(biru.jpg);
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            color: #ffffff;
            margin-bottom: 20px;
        }

        
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }

        button {
            background-color: #2471A3 ;
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            margin-right: 10px; 
        }

        button:hover {
            background-color: ;
        }
    </style>
</head>

<body>
    <h1>Halaman pembayaran SPP</h1>
    <div class="form-container">
    <?php
        include 'koneksi.php';
        if (isset($_POST["ok"])){
           
            $id_pembayaran = $_POST["id_pembayaran"];
            $id_petugas = $_POST["id_petugas"];
            $NIS = $_POST["NIS"];
            $tgl_bayar = $_POST["tgl_bayar"];
            $jumlah_bayar = $_POST["jumlah_bayar"];
           $input = mysqli_query($koneksi, "insert into pembayaran (id_pembayaran,	id_petugas , NIS, tgl_bayar, jumlah_bayar) values ( '$id_pembayaran','$id_petugas', '$NIS', '$tgl_bayar', '$jumlah_bayar')");
           
           echo "<div class='alert alert-success'> PEMBAYARAN SUKSES</div>";
        }
        ?>
        
        <h2>Form pembayaran SPP</h2>

<form action="pembayaran.php" method=”post”>



<label for=”id_petugas”>ID Petugas:</label>

<input type=”text” id=”” name=”id_petugas” required>

<label for=”nis”>NIS:</label>
<input type=”text” id=”” name="NIS" required>



<label for="tgl_bayar">Tanggal Pembayaran:</label>
            <input type="date" id="" name="tgl_bayar" required>

<label for=”jumlah_bayar”>Jumlah Bayar:</label>

<input type=”text” id="" name=”jumlah_bayar” required>

<BR>

<center><button type=”submit” name=”ok”>Simpan</button></center>

<BR>

<center><a href=tblbayar.php” target=”_blank”><button type=”button”>Lihat pembayaran Lainnya</button></a></center>

</div>

</form>
    </div>   
</body>

</html>