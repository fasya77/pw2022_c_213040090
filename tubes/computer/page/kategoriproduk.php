<!-- 
 Lokasi dan Nama File	: page/kategori_produk.php
-->

<br>
<div class="container">
	<form class="produk_search" method="post" class="form">
		<input class="form_search" type="text" name="cari" placeholder="cari..">
		<button class="form_button2" for="cari">cari</button>
	</form>
	<div class="col-12">
		<h1>KATEGORI PRODUK</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<?php
		$idproduk = @$_GET['idproduk'];
		$tampil = mysqli_query($conn, "SELECT * FROM kategori_produk");
		if (isset($_POST['cari'])) {
			$tampil = mysqli_query($conn, "SELECT * FROM kategori_produk WHERE kategori LIKE '%" . $_POST['cari'] . "%'");
		}
		while ($tampil1 = mysqli_fetch_array($tampil)) {
		?>
			<div class="col-3 produk">
				<img src="images/fullset.png" width="100%"><br>
				<div class="produk_nama">
					<a href="?page=kategori_produk1&&id_kategori=<?php echo @$tampil1['id_kategori']; ?>">
						<?php echo $tampil1['kategori']; ?>
					</a>
				</div><br>
				<a href="?page=kategori_produk1&&id_kategori=<?php echo @$tampil1['id_kategori']; ?>" class="produk_tombol_kecil">LIHAT DAFTAR PRODUK</a>
			</div>
		<?php } ?>
	</div>
</div>