<!-- 
 Lokasi dan Nama File	: page/home.php
-->
<div class="thumbnail">
    <div class="linear"></div>
</div>
<div class="body_konten">
    <div class="container">
        <form class="produk_search" method="post" class="form">
            <input class="form_search" type="text" name="cari" placeholder="cari..">
            <button class="form_button2" for="cari">cari</button>
        </form>
        <div class="row">
            <div class="col-12 heading_produk">
                <h1>Rekomendasi</h1>
            </div>
        </div>
        <!-- isi array $produk dengan query dibawah -->
        <?php
        $produk = mysqli_query($conn, "SELECT * FROM produk ORDER BY idproduk");
        if (isset($_POST['cari'])) {
            $produk = mysqli_query($conn, "SELECT * FROM produk WHERE namaproduk LIKE '%" . $_POST['cari'] . "%'");
        }
        while ($produk1 = mysqli_fetch_array($produk)) {
        ?>
            <div class="col-2">
                <img src="<?php echo $produk1['images']; ?>" width="100%" height="100px"><br>
                <div class="namaproduk" align="center">
                    <a href="?page=detail_produk&&idproduk=<?php echo $produk1['idproduk']; ?>">
                        <?php echo $produk1['namaproduk']; ?>
                    </a>
                </div>
                <center>
                    <a href="?page=detail_produk&&idproduk=<?php echo $produk1['idproduk']; ?>" class="detail_produk">Detail produk</a>
                </center>
            </div>
        <?php } ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 heading_produk">
                <h1>produk Terbaru</h1>
            </div>
        </div>
        <?php
        $produk = mysqli_query($conn, "SELECT * FROM produk ORDER BY idproduk DESC");
        if (isset($_POST['cari'])) {
            $produk = mysqli_query($conn, "SELECT * FROM produk WHERE namaproduk LIKE '%" . $_POST['cari'] . "%'");
        }
        while ($produk1 = mysqli_fetch_array($produk)) {
        ?>
            <div class="col-2">
                <img src="<?php echo $produk1['images']; ?>" width="100%" height="100px"><br>
                <div class="namaproduk" align="center">
                    <a href="?page=detail_produk&&idproduk=<?php echo $produk1['idproduk']; ?>">
                        <?php echo $produk1['namaproduk']; ?>
                    </a>
                </div>
                <center>
                    <a href="?page=detail_produk&&idproduk=<?php echo $produk1['idproduk']; ?>" class="detail_produk">Detail produk</a>
                </center>
            </div>
        <?php } ?>
    </div>
    <div class="row">

    </div>
</div>