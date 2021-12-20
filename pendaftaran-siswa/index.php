<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Pendaftaran Siswa</title>
	<link rel="stylesheet" href="index.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
		<header>
			<h3>Pendaftaran Siswa Baru</h3>
			<h1>SD SMP SMA PASTI BISA</h1>
		</header>
		
		<h4>Pilihan Menu</h4>
		<nav>
			<ul>
				<li><a href="form-daftar.php">Daftar Baru</a></li>
				<li><a href="list-siswa.php">Pendaftar</a></li>
			</ul>
		</nav>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	</body>
</html>
