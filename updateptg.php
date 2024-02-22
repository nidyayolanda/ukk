<?php
include 'koneksi.php';
if(isset($_POST["ok"])){
    $id_pembayaran = $_POST["id_pembayaran"];
  $id_petugas = $_POST["id_petugas"];
  $NIS = $_POST["NIS"];
  $tgl_bayar = $_POST["tgl_bayar"];
  $jumlah_bayar = $_POST["jumlah_bayar"];

  $update = mysqli_query($koneksi, "UPDATE pembayaran SET pembayaran= '$pembayaran' WHERE id_pembayaran=$id_pembayaran");
  
    if($update) {
        echo '<script>alert("Berhasil edit Pembayaran"); window.location.href = "tblbayar.php";</script>';
    }else{
        echo '<script>alert("gagal edit Pembayaran");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pembayaran SPP</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient( rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(neon.jpg);
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
            background-color: #66CDAA;
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            margin-right: 10px; /* Added margin to separate buttons */
        }

        button:hover {
            background-color: #F0E68C;
        }
    </style>
</head>

<body>
    <h1>FORM PEMBAYARAN SPP</h1>
    <div class="form-container">
    <?php 
          include 'koneksi.php';
          $id_pembayaran = $_GET['id_pembayaran'];
          $update = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
          foreach ($update as $row) {

          }

          ?>
         
            <br>
        <form action="" method="POST">
		<label for="id_pembayaran">ID pembayaran:</label>
            <input type="number" id="id_pembayaran" name="id_pembayaran" value="<?php echo $row['id_pembayaran'];?>" readonly>
        <label for="id_petugas">ID Petugas:</label>
            <input type="text" id="id_petugas" name="id_petugas" value="<?php echo $row['id_petugas'];?>" readonly>
            <input type="text" id="NIS" name="NIS" value="<?php echo $row['NIS']; ?>" >
            <label for="tgl_bayar">Tanggal pembayaran:</label>
            <input type="date" id="tgl_bayar" name="tgl_bayar" value="<?php echo $row['tgl_bayar']; ?>" >

            <label for="jumlah_bayar">Jumlah Bayar:</label>
            <textarea id="jumlah_bayar" name="jumlah_bayar" rows="5" cols="100" ><?= $row['jumlah_bayar']; ?></textarea>
<br>

           <center><button type="submit" name="ok">Update</button></center>
           <BR>
           <center><a href="tblbayar.php" target="_blank"><button type="button">Lihat pembayaran Lainnya</button></a></center> 
		  
		</form>
    </div>   
</body>
</html>




