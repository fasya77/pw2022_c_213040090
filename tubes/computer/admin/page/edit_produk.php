	<div class="container">
		<?php
		$idproduk = mysqli_real_escape_string($conn, @$_GET['idproduk']);
		$proses = mysqli_real_escape_string($conn, @$_GET['proses']);
		if ($proses == "update") {
			$idkategori = mysqli_real_escape_string($conn, @$_POST['id_kategori']);
			$namaproduk = mysqli_real_escape_string($conn, @$_POST['namaproduk']);
			$harga = mysqli_real_escape_string($conn, @$_POST['harga']);
			$stok = mysqli_real_escape_string($conn, @$_POST['stok']);
			$keterangan = mysqli_real_escape_string($conn, @$_POST['keterangan']);
			$berat = mysqli_real_escape_string($conn, @$_POST['berat']);
			$pilihanwarna = mysqli_real_escape_string($conn, @$_POST['pilihanwarna']);
			$deskripsi = mysqli_real_escape_string($conn, @$_POST['deskripsi']);
			$nama_gambar = mysqli_real_escape_string($conn, @$_FILES['images']['name']);
			$tmp_gambar = mysqli_real_escape_string($conn, @$_FILES['images']['tmp_name']);
			if (!empty($nama_gambar)) {
				$cekgambar = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM produk WHERE idproduk='$idproduk'"));
				if (!empty($cekgambar['images'])) { //gambar akan dihapus jika didatabase sebelumnya sudah ada gambar
					unlink("../$cekgambar[images]");
				}
				//baris ini adalah baris untuk upload gambar baru
				copy($tmp_gambar, "../images/$nama_gambar");
				$update_gambar = mysqli_query($conn, "UPDATE produk SET images='images/$nama_gambar' WHERE idproduk='$idproduk'");
			}
			$update = mysqli_query($conn, "UPDATE produk SET id_kategori='$idkategori',namaproduk='$namaproduk',harga='$harga',stok='$stok',keterangan='$keterangan',berat='$berat',pilihanwarna='$pilihanwarna',deskripsi='$deskripsi' WHERE idproduk='$idproduk'");
			if ($update) {
				echo "Sukses!! Update Data Berhasil";
				header("Location: ?page=tambah_produk");
			} else {
				echo "Maaf!! Proses Update Data Gagal";
			}
		}

		$tampildata = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM produk WHERE idproduk='$idproduk'"));
		?>
		<h2 class="heading_film">Edit Data Produk <?php echo $tampildata['namaproduk'] ?></h2>
		<form method="post" action="?page=edit_produk&&proses=update
	&&idproduk=<?php echo $idproduk ?>" enctype="multipart/form-data">
			<label class="col-4">Kategori produk</label>
			<div class="col-8">
				<select class="form_input" name="id_kategori">
					<?php
					$kategoriproduk = mysqli_query(
						$conn,
						"SELECT * FROM kategori_produk"
					);
					while ($kategoriproduk1 = mysqli_fetch_array($kategoriproduk)) {
					?>
						<option value="
					<?php echo $kategoriproduk1['id_kategori']; ?>" <?php if ($tampildata['id_kategori'] == $kategoriproduk1['id_kategori']) { ?>selected <?php } ?>>
							<?php echo $kategoriproduk1['kategori']; ?></option>
					<?php } ?>
				</select>
			</div>
			<label class="col-4">Nama Produk</label>
			<div class="col-8">
				<input class="form_input" type="text" name="namaproduk" value="<?php echo $tampildata['namaproduk']; ?>">
			</div>
			<label class="col-4">Harga</label>
			<div class="col-8">
				<input class="form_input" type="text" name="harga" value="<?php echo $tampildata['harga']; ?>">
			</div>
			<label class="col-4">Stok</label>
			<div class="col-8">
				<textarea class="form_input" name="stok" rows="10" style="width:100%;"><?php echo $tampildata['stok']; ?></textarea>
			</div>
			<label class="col-4">Keterangan</label>
			<div class="col-8">
				<input class="form_input" type="text" name="keterangan" value="<?php echo $tampildata['keterangan']; ?>">
			</div>
			<label class="col-4">Berat</label>
			<div class="col-8">
				<input class="form_input" type="text" name="berat" value="<?php echo $tampildata['berat']; ?>">
			</div>
			<label class="col-4">Pilihan warna</label>
			<div class="col-8">
				<input class="form_input" type="text" name="pilihanwarna" value="<?php echo $tampildata['pilihanwarna']; ?>">
			</div>
			<label class="col-4">Deskripsi</label>
			<div class="col-8">
				<input class="form_input" type="text" name="deskripsi" value="<?php echo $tampildata['deskripsi']; ?>">
			</div>
			<label class="col-4">Ganti Gambar Produk</label>
			<div class="col-8">
				<input class="form_input" type="file" name="images">
			</div>

			<div class="col-12">
				<img src="../<?php echo $tampildata['images']; ?>" alt="" width="100px">
			</div>
			<div class="row">
				<div class="col-12">
					<button class="form_button2" type="submit">Update Data</button>
				</div>
			</div>
		</form>
		<br>
	</div>