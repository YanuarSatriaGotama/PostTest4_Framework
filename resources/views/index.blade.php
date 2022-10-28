<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<title>PostTest 2 Framework</title>
</head>

<body id="badan">

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
				<h1><a href=""></a>TOKO ELEKTRONIK ACUN <span class="fs-4">{{ Auth::user()->name ?? "HomePage"}}</span></h1>
				<ul>
					<li class="active"><a href="index.html">HOME</a></li>
					<li><a href="/home">Product</a></li>
					<li><a href="index.html">About Us</a></li>
					<li class="nav-item"><a href="{{ Auth::user() ? '/logout': '/login'}}" class="nav-link active" aria-current="page">{{ Auth::user() ? 'Logout' :'Login'}}</a></li>
				</ul>
		</div>
	</header>
	
    <section id="section1" class="sectionA">
        <h1 id="judul">POST TEST 2 FRAMEWORK</h1>

    </section>

    <button onclick="alert('Sudah dibilang Jangan')">Jangan Klik Aku</button>

	<!-- FlexBox -->
	<div class="box">
		<div class="satu">
			<h4>Barang</h4>
			<p class= "para1"><br>Kami menjual barang-barang elektronik, </br><br>seperti kipas, lampu, dan AC</br>
			</p>
		</div>
		<div class="dua">
			<h4>Domisili</h4>
			<p class= "para2"><br>Toko Kami  Berdomisili di kota Bontang </br></p>
		</div>
		<div class="tiga">
			<h4>About Me</h4>
			<p class= "para3"><br>Saya adalah mahasiswa informatika yang ingin berwirausaha</br></p>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small> Copyright &copy; 2021 - Yanuar Satria Gotama, All Rights Reserved.</small>
		</div>
	</footer>
    <script src="script.js"></script>
</body>
</html>