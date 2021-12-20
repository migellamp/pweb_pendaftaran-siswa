<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
	<title>Pendaftaran Siswa</title>
	<link rel="stylesheet" href="form-daftar.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container">
		<header>
			<h3>Formulir Pendaftaran Siswa Baru</h3>
		</header>
		
		<form action="proses-pendaftaran.php" method="POST">
			
			<fieldset>
			
			<p>
				<label for="nama">Nama :</label> <br>
				<input class="nama1" type="text" name="nama" placeholder="Nama lengkap" />
			</p>
			<p>
				<label for="alamat">Alamat :</label> <br>
				<textarea name="alamat"></textarea>
			</p>
			<p>
				<label for="jenis_kelamin">Jenis Kelamin :</label> <br>
				<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label> <br>
				<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
			</p>
			<p>
				<label for="agama">Agama :</label> <br>
				<select name="agama">
					<option>Islam</option>
					<option>Kristen</option>
					<option>Hindu</option>
					<option>Budha</option>
					<option>Atheis</option>
				</select>
			</p>
			<p>
				<label for="sekolah_asal">Sekolah Asal :</label> <br>
				<input class="nama1" type="text" name="sekolah_asal" placeholder="Nama sekolah" />
			</p>
			<p>
				<input class="submit" type="submit" value="Daftar" name="daftar" />
			</p>
			
			</fieldset>
		
		</form>
		</div>
	
	</body>
</html>
