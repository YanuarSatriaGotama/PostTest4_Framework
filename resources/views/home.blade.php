@extends('layouts.global')

<?php
$conn = mysqli_connect("localhost", "root", "", "tokoelek");
$select_sql = "SELECT *FROM elektroniks";
$result = $conn->query($select_sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<title>PostTest 2 Framework</title>
</head>

<body style="background-color:#FFEBCD;">

@section('content')

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
				<h1><a href="index.php"></a>DATA TOKO ELEKTRONIK ACUN </h1>
				<ul>
					<li><span class="fs-4">{{ Auth::user()->name ?? "Home
Page"}}</span></li>
					<li><a href=" ">HOME</a></li>
					<li class="active"><a href=" ">Product</a></li>
					<li><a href=" ">About Us</a></li>
				</ul>
		</div>
	</header>

	<section class="content">
	<div class="container">
        <h3 class="title">DATA BARANG</h3>
		<a href="{{ route('create') }}" class=""><Button class="btn btn-primary mb-3">Tambah</Button></a>
        <table>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Jenis</th>
                <th scope="col">Karyawan</th>
				<th scope="col">Aksi</th>
                
            </tr>

			@foreach ($elektroniks as $elektronik)
                    <tr>
                    <th scope="row">{{ $elektronik->id }}</th>
                    <td>{{ $elektronik->nama_barang }}</td>
                    <td>{{ $elektronik->harga }}</td>
                    <td>{{ $elektronik->jenis }}</td>
                    <td>{{ $elektronik->karyawan->nama}}</td>
					<td><a href="/show/{{ $elektronik->id }}" class=""><Button class="btn btn-success mb-3">Lihat</Button></a></td>

                    {{-- Cukup Panggil seperti di atas --}}
                </tr>
            @endforeach
			
        </table>
		</div>
    </section>

    <!-- footer -->
    <footer>
		<div class="container">
			<small> Copyright &copy; 2021 - Yanuar Satria Gotama, All Rights Reserved.</small>
		</div>
	</footer>
@endsection

</body>
</html>
