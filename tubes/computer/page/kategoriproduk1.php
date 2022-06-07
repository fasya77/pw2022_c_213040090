<!-- 
 Lokasi dan Nama File	: page/kategori_produk1.php
-->
<br>
<div class="container">
    <div class="col-12">
        <h1>DETAIL KATEGORI PRODUK</h1>
    </div>
</div>
<div class="container">
    <?php
    $id_kategori = mysqli_real_escape_string($conn, @$_GET['id_kategori']);
    $produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_kategori='$id_kategori' ORDER BY idproduk DESC");
    $produk2 = mysqli_num_rows($produk);
    if ($produk2 == 0) {
        echo "<font size='+2' color='#FF0004'>Maaf!! Data Produk pada Kategori ini masih Kosong</font>";
    }
    while ($produk1 = mysqli_fetch_array($produk)) {
    ?>
        <div class="col-3 produk">
            <img src="<?php echo $produk1['images']; ?>" width="100%" height="200px"><br>
            <div class="produk_nama">
                <a href="?page=detail_produk&&idproduk=<?php echo $produk1['idproduk']; ?>">
                    <?php echo $produk1['namaproduk']; ?>
                </a>
            </div>
            <?php echo $produk1['harga']; ?><br>
            <a href="?page=detail_produk&&idproduk=<?php echo $produk1['idproduk']; ?>" class="produk_tombol_kecil">Detail Produk</a>
            <a href="#" class="produk_tombol_kecil">Add to Cart</a>
        </div>
    <?php } ?>
</div>
<div class="row"></div>