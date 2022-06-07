<?php
$cekuserlogin = $_SESSION['username'];
?>
<?php
if (empty($cekuserlogin)) {
	header("Location: login.php");
} else { ?>
	<!DOCTYPE html>
	<html>

	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href=".../style.css">
	</head>

	<body>
		<div class="container">
			<h2 class="">PRODUK</h2>
			<hr>
			<b>Tambah/Edit Data</b>
			<?php
			//proses simpan data
			$proses = mysqli_real_escape_string($conn, @$_GET['proses']);
			if ($proses == "simpan") {
				$idkategori = @$_POST['id_kategori'];
				$namaproduk = @$_POST['namaproduk'];
				$harga = @$_POST['harga'];
				$stok = @$_POST['stok'];
				$keterangan = @$_POST['keterangan'];
				$nama_gambar = @$_FILES['images']['name'];
				$tmp_gambar = @$_FILES['images']['tmp_name'];
				$berat = @$_POST['berat'];
				$pilihanwarna = @$_POST['pilihanwarna'];
				$deskripsi = @$_POST['deskripsi'];
				if (!empty($nama_gambar)) {
					copy($tmp_gambar, "../images/$nama_gambar");
				}
				$simpan = mysqli_query($conn, "
    		INSERT INTO produk(id_kategori,namaproduk,
    		harga,stok,keterangan,images
    		,berat,pilihanwarna,deskripsi) 
    		VALUES('$idkategori','$namaproduk',
    		'$harga','$stok',
    		'$keterangan','images/$nama_gambar','$berat','$pilihanwarna','$deskripsi')");
				if ($simpan) {
					echo "<h3>Input Data Berhasil</h3>";
				} else {
					echo "<h3>Input Data Gagal</h3>";
				}
			}
			if ($proses == "hapus") {
				$idproduk = mysqli_real_escape_string($conn, @$_GET['idproduk']);
				$cekdata = mysqli_fetch_array(mysqli_query(
					$conn,
					"SELECT * FROM produk WHERE 
    		idproduk='$idproduk'"
				));
				unlink("../$cekdata[images]");
				$hapus = mysqli_query($conn, "DELETE FROM produk where 
    		idproduk='$idproduk'");
				if ($hapus) {
					echo "<h3>Hapus Data Berhasil</h3>";
				} else {
					echo "<h3>Hapus Data Gagal</h3>";
				}
			}
			?>
			<form method="post" action="?page=tambah_produk&&proses=simpan" enctype="multipart/form-data">
				<label class="col-4">Kategori Produk</label>
				<div class="col-8">
					<select class="form_input" name="id_kategori">
						<?php
						$kategorifilm = mysqli_query(
							$conn,
							"SELECT * FROM kategori_produk"
						);
						while ($kategorifilm1 = mysqli_fetch_array($kategorifilm)) {
						?>
							<option value="
					<?php echo $kategorifilm1['id_kategori']; ?>"><?php echo $kategorifilm1['kategori']; ?></option>
						<?php } ?>
					</select>
				</div>
				<label class="col-4">Nama Produk</label>
				<div class="col-8">
					<input class="form_input" type="text" name="namaproduk" maxlength="100" placeholder="Masukan nama produk" minlength="1">
				</div>
				<label class="col-4">Harga</label>
				<div class="col-8">
					<input class="form_input" type="text" name="harga" maxlength="20" placeholder="Masukan harga produk dengan angka" minlength="1">
				</div>
				<label class="col-4">Stok</label>
				<div class="col-8">
					<input class="form_input" type="text" name="stok" maxlength="20" placeholder="Masukan stok produk" minlength="1">
				</div>
				<label class="col-4">Keterangan</label>
				<div class="col-8">
					<textarea class="form_input" name="keterangan" rows="10" style="width:100%;" minlength="1"></textarea>
				</div>
				<label class="col-4">Berat</label>
				<div class="col-8">
					<input class="form_input" type="text" name="berat" maxlength="20" minlength="1" placeholder="Masukan berat produk dengan angka">
				</div>
				<label class="col-4">Pilihan warna</label>
				<div class="col-8">
					<input class="form_input" type="text" name="pilihanwarna" minlength="1" maxlength="25" placeholder="Masukan warna produk">
				</div>
				<label class="col-4">Deskripsi</label>
				<div class="col-8">
					<textarea class="form_input" name="deskripsi" rows="20" style="width:100%;" minlength="1"></textarea>
				</div>
				<label class="col-4">Upload Gambar Buku</label>
				<input class="col-8" type="file" accept="image/*" name="images">

				<label class="col-4">&nbsp;</label>
				<div class="col-8">
					<button class="form_button2" type="submit">Simpan Data</button>
				</div>
			</form>
			<h3>Tampil Data</h3>
			<form method="post" class="form">
				<input type="text" name="cari" placeholder="cari..">
				<button for="cari">cari</button>
			</form>
			<table class="table_admin" border="1" cellpadding="5" cellspacing="0">
				<tr>
					<td>NO</td>
					<td>Nama Produk</td>
					<td>Harga Rupiah</td>
					<td>Stok Produk</td>
					<td>Gambar</td>
					<td>aksi</td>
				</tr>
				<?php
				$tampildata = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM kategori_produk"));
				$i = 1;
				$query = mysqli_query($conn, "SELECT * FROM produk");
				if (isset($_POST['cari'])) {
					$query = mysqli_query($conn, "SELECT * FROM produk WHERE namaproduk LIKE '%" . $_POST['cari'] . "%'");
				}
				while ($cetak = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $cetak['namaproduk']; ?></td>
						<td><?php echo $cetak['harga']; ?></td>
						<td><?php echo $cetak['stok']; ?></td>
						<td><img src="../<?php echo $cetak['images']; ?>" alt="" width="50px"></td>
						<td>
							<a class="text_kecil" href="?page=edit_produk&&idproduk=
				<?php echo $cetak['idproduk']; ?>">
								Edit</a>
							<a class="text_kecil2" href="?page=tambah_produk&&idproduk=
				<?php echo $cetak['idproduk']; ?>&&proses=hapus">
								Hapus</a>
						</td>
					</tr>
				<?php $i = $i + 1;
				} ?>
			</table>
			<br>
		</div>
	</body>

	</html>
<?php } ?>