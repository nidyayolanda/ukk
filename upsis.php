<?php
include 'koneksi.php';
if(isset($_POST["ok"])){
    $NIS = $_POST["NIS"];
    $nama = $_POST["nama"];
    $id_kelas = $_POST["id_kelas"];
    
    $insert = mysqli_query($koneksi, "UPDATE siswa SET id_kelas= '$id_kelas' WHERE NIS= $NIS");
  
    if($insert) {
    
    
        echo '<script>alert("Berhasil edit Data Siswa"); window.location.href = "tblsiswa.php";</script>';
    } else {
        echo '<script>alert("Gagal edit Data Siswa");</script>';
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
    if (isset($_POST["ok"]))
          include 'koneksi.php';
          $NIS = $_GET['NIS'];
          $update = mysqli_query($koneksi, "SELECT * FROM siswa WHERE NIS='$NIS'");
          foreach ($update as $row) {

          }

          ?>
         
            <br>
            <h2>FORM SISWA</h2>
        <form action="" method="post">
      
            <label for="">NIS:</label>
            <input type="text" id="" name="NIS" value="<?php echo $row['NIS'];?>"  required>

            <label for="">NAMA :</label>
            <input type="text" id="nama" name="nama" value="<?php echo $row['nama'];?>"  required>

            <label for="">ID KELAS:</label>
            <input type="text" id="" name="id_kelas" value="<?php echo $row['id_kelas'];?>"  required>


           <center><button type="submit" name="ok">Submit</button></center>
           <BR>
           <center><a href="tblsiswa.php" target="_blank"><button type="button">Lihat Siswa Lainnya</button></a></center> 
        </form>
    </div>   
</body>
</html>




