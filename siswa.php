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
            background: linear-gradient( rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(d.jpg);
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
            background-color:#2471A3;
        }
    </style>
</head>

<body>
<h1>Halaman pembayaran SPP</h1>
    <div class="form-container">
        <?php
        include 'koneksi.php';
        if (isset($_POST["ok"])){
            $NIS = $_POST["NIS"];
            $nama = $_POST["nama"];
            $id_kelas = $_POST["id_kelas"];

          
            $input = mysqli_query($koneksi, "insert into siswa (NIS, nama, id_kelas) values ('$NIS', '$nama', '$id_kelas')");
          
          
        }
        ?>
        <h2>FORM SISWA</h2>
        <form action="siswa.php" method="post">
       
        <label for="">NIS:</label>
            <input type="text" id="" name="NIS" required>

      
        <label for="">Nama:</label>
            <input type="text" id="" name="nama" required>

        <label for="">ID Kelas</label>
            <input type="text" id="" name="id_kelas" required>

           <center><button type="submit" name="ok">Submit</button></center>
           <BR>
           <center><a href="tblsiswa.php" target="_blank"><button type="button">Lihat Data Lainnya</button></a></center> 
        </form>
    </div>   
</body>

</html>