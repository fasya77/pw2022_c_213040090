<?php
//File Index.php
include "connect.php";
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Halaman User</title>

	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<section class="header">
		<div class="container">
			<div class="row">
				<div class="col-1 heading">
					<h2>KadekStore</h2>
				</div>
				<div class="col-11 header_menu_user">
					<a href="?page" class="menu_atas">Beranda</a>
					<a href="?page=kategori_produk" class="menu_atas">Kategori Produk</a>
					<a href="?page=troli" class="menu_atas">Keranjang Belanja</a>
					<a href="?page=konfirmasi" class="menu_atas">Konfirmasi</a>
					<a href="?page=kontak" class="menu_atas">Hubungi Kami</a>
				</div>
			</div>
		</div>
	</section>

	<section class="slideshow"></section>
	<section class="konten">


	
		<?php
		$page = @$_GET['page'];
		if ($page == "kategori_produk") {
			include "page/kategoriproduk.php";
		} elseif ($page == "kategori_produk1") {
			include "page/kategoriproduk1.php";
		} elseif ($page == "troli") {
			include "page/troli.php";
		} elseif ($page == "konfirmasi") {
			include "page/konfirmasi.php";
		} elseif ($page == "detail_produk") {
			include "page/detail_produk.php";
		} elseif ($page == "proses_order") {
			include "page/proses_order.php";
		} elseif ($page == "kontak") {
			include "page/kontak.php";
		} else {
			include "page/home.php";
		}
		?>


	</section>
	<section class="footer">
		&nsub;
	</section>
	<section class="footer1">
		Copyright &copy; 2019. All Right Reserved
	</section>
</body>

</html>