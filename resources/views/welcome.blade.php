<?php
$conn = mysqli_connect("localhost", "root", "", "tokoelek");
$select_sql = "SELECT *FROM elektroniks";
$result = $conn->query($select_sql);

// if (!$result) {
//     echo mysqli_error($conn)
// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PostTest 2 FW</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body style="background-color:#FFEBCD;">

	<!-- navbar -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<div class="sticky">
				<h1><a href="index.php"></a>DATA TOKO ELEKTRONIK ACUN</h1>
				<ul>
					<li class="active"><a href="index.php">HOME</a></li>
					<li><a href=" ">Product</a></li>
					<li><a href=" ">About Us</a></li>
				</ul>
		</div>
	</header>

	<section class="content">
	<div class="container">
        <h3 class="title">DATA BARANG</h3>
        <table>
            <tr>
                <th>Id</th>
                <th>NAMA</th>
                <th>HARGA</th>
                <th>JENIS</th>
            </tr>

			
			@php
				while($el = $result-> fetch_assoc()) {
					echo "
						<tr class='mode-text'>
							<td scope='row'>". $el["id"]."</td>
							<td>". $el["nama_barang"]."</td>
							<td>". $el["harga"]."</td>
							<td>". $el["jenis"]."</td>
						</tr>
						";
				}
			@endphp
			
        </table>
		</div>
    </section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small> Copyright &copy; 2021 - Yanuar Satria Gotama, All Rights Reserved.</small>
		</div>
	</footer>
</body>
</html>