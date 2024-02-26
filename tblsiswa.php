<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https:fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<style>
		* {
			font-family: 'Roboto', sans-serif;
		}
		body{
			background: linear-gradient( rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(biru.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			background-attachment: fixed;
		}
		input {
			background-color: #F0E68C;
			color: #000;
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
		}

		table .mawar {
			background-color: #F0E68C;
			color: #000;
		}
		
	a .kucing {
		background-color: #66CDAA;
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

	a .dragon {
		background-color: #F0E68C;
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

	</style>
       <!-- Navigation-->
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="kelas.php">KELAS</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html">LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
	<title>pembayaran spp</title>
</head>
<body class="text-white">
	<h1 class="text-center mt-5" style="color: white;">HALAMAN PEMBAYARAN SPP</h1>
	<h1 class="text-center mt-4" style="color: white;">Tabel Pembayaran</h1>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10">	
			<form class="form-inline mt-5 mx-auto">
				
				<a style="color: white" href="tblsiswa.php" class="btn btn-secondary">tampilkan semua</a>
			</form>
			<table class="table table-bordered bg-light mt-5">
				<thead class="mawar">
					<tr>
					<th scope="col">No</th>
						

                        <th scope="col">NIS</th>
						<th scope="col">Nama</th>
                        <th scope="col">ID Kelas</th>
						<th scope="col">aksi</th>
					</tr>
				</thead>
			</tbody>
			<form method="POST">
  <input type="text" name="textcari" placeholder="Cari "/>
  <input type="submit"  name="cari" value="cari"/>
    </form>
    
			<?php
    include 'koneksi.php';
    $input = mysqli_query($koneksi, "SELECT * from siswa");
	if (isset($_POST['cari'])) {
        $nama=$_POST["textcari"];
        $input = mysqli_query($koneksi,  "SELECT * from siswa WHERE NIS LIKE '%$nama%' OR nama LIKE '%$nama%' OR id_kelas LIKE '%$nama%'" );
   
    }else{
$input=mysqli_query($koneksi, "SELECT * from siswa");
    }
    $no = 1;
    foreach ($input as $row){
        echo "<tr>
        <td>$no</td>

        <td>" . $row['NIS'] . "</td>
		<td>" . $row['nama'] . "</td>
		<td>" . $row['id_kelas'] . "</td>
        <td>
					<a href='upsis.php?NIS=$row[NIS]'>	
					<input type='button' class='kucing'
					value='edit'></a>

					<a href='hapussis.php?NIS=$row[NIS]'>
					<input type='button' class='dragon'
					value='hapus'></a>
					</td></tr>";
        $no++;
    }
    ?>  
			</div>
		</div>
	</div>
	
	<script scr="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-"></script>

</body>
</html>
