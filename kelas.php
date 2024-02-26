</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Pengaduan Masyarakat</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient( rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(light.jpg);
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
<h1>Halaman pembayaran SPP</h1>
    <div class="form-container">
        <?php
        include 'koneksi.php';
        if (isset($_POST["ok"])){
           
           
            $id_kelas = $_POST["id_kelas"];
            $nama_kelas = $_POST["nama_kelas"];
            $kompetensi_keahlian = $_POST["kompetensi_keahlian"];
            $input = mysqli_query($koneksi, "insert into kelas (id_kelas,	nama_kelas , kompetensi_keahlian)
             values ( '$id_kelas','$nama_kelas', '$kompetensi_keahlian')");
          
           echo "<div class='alert alert-success'> SUKSES</div>";
        }
        ?>
        <h2>FORM KELAS</h2>
        <form action="kelas.php" method="post">
      
            <label for="">ID KELAS:</label>
            <input type="text" id="" name="id_kelas" required>

            <label for="">NAMA KELAS:</label>
            <input type="text" id="nama" name="nama_kelas" required>

            <label for="">KOMPETENSI KEAHLIAN:</label>
            <input type="text" id="" name="kompetensi_keahlian" required>


           <center><button type="submit" name="ok">Submit</button></center>
           <BR>
           <center><a href="tblkelas.php" target="_blank"><button type="button">Lihat KELAS Lainnya</button></a></center> 
        </form>
    </div>   
</body>

</html>