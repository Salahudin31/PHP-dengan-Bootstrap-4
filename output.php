<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/tugas2.css">
</head>
<body>

	<div class="container">
		<img src="img/logo.png" class="img-fluid float-left mr-4">
		<div class="row no-gutters header">
			<div class="col">
				<div class="caption">
					<h4 class="text-center">Kawan Jalan</h4>
					<p>Kawan Jalan merupakan perusahaan jasa, terutama untuk jasa perencanaan perjalanan, pelatihan, dan juga jasa event organizer.</p>
				</div>
			</div>
		</div>
		<div class="jumbotron container content-report">
			<div class="report row top">
				<div class="col-3">Nip</div>:
				<div class="col"><?php echo $_POST["nip"]; ?></div>
			</div>
			<div class="report row">
				<div class="col-3">Nama</div>:
				<div class="col"><?php echo $_POST["nama"]; ?></div>
			</div>
			<div class="report row">
				<div class="col-3">Alamat</div>:
				<div class="col"><?php echo $_POST["alamat"]; ?></div>
			</div>	
			<div class="report row">
				<div class="col-3">Email</div>:
				<div class="col"><?php echo $_POST["email"]; ?></div>
			</div>
			<div class="report row">
				<div class="col-3">Kode Tujuan</div>:
				<div class="col"><?php echo $_POST["kd_tujuan"]; ?></div>
			</div>
			<a href="index.html" class="btn btn-outline-success float-right"><< Back</a>	
		</div>
	</div>
	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Kode</th>
					<th>Tujuan</th>
					<th>Harga</th>
					<th>Jumlah</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>001</td>
					<td>Bali</td>
					<td>2.000.000</td>
					<td>12</td>
				</tr>
				<tr>
					<td>002</td>
					<td>Jogja</td>
					<td>500.000</td>
					<td>20</td>
				</tr>
				<tr>
					<td>003</td>
					<td>Gunung Binaya, Maluku</td>
					<td>2.500.000</td>
					<td>10</td>
				</tr>
				<tr>
					<td>004</td>
					<td>Lombok</td>
					<td>3.000.000</td>
					<td>20</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="jumbotron">
		<div class="row no-gutters footer">
			<div class="col-5 text-right pr-4">
				<img src="img/logo2.jpeg" width="120">
			</div>
			<div class="col">
				<h5>Contact Us</h5>
				<table>
					<tr>
						<td>Email </td>
						<td>: kawanjalan(@)gmail.com</td>
					</tr>
					<tr>
						<td>Twitter </td>
						<td>: @kawan_jalan</td>
					</tr>		
					<tr>
						<td>Facebook </td>
						<td>: https://www.facebook.com/infokawanjalan</td>
					</tr>		
					<tr>
						<td>Website </td>
						<td>: http://kawanjalan.com</td>
					</tr>			
				</table>
			</div>
			
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>