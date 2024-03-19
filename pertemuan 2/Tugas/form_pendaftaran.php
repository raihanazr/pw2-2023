<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.container {
			margin-top: 50px;
			background-color: #FFE6E6;
		}

		body{
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: pink;
        }
	</style>
</head>
<body>

	<div class="container">
		<h1>Form Pendaftaran</h1>
		<form action="hasil_pendaftaran.php" method="POST">
			<div class="form-group">
				<b><label for="nama_lengkap">Nama Lengkap</label></b>
				<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
			</div>
			<div class="form-group">
				<b><label for="email">Email</label></b>
				<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<b><label for="alamat">Alamat</label></b>
				<textarea class="form-control" id="alamat" name="alamat"></textarea>
			</div>
			<div class="form-group">
				<b><label for="telepon">Telepon</label></b>
				<input type="tel" class="form-control" id="telepon" name="telepon">
			</div>
			<button type="submit" class="btn btn-dark">Submit</button>
		</form>
	</div>

</body>
</html>
