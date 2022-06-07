<!-- 
 Lokasi dan Nama File	: page/detail_produk.php
-->
<br>
<div class="container">
    <div class="col-12">
        <h1>DETAIL PRODUK</h1>
    </div>
</div>
<div class="container">
    <!-- ambil data dari database produk -->
    <?php
    $idproduk = mysqli_real_escape_string($conn, @$_GET['idproduk']);
    $tampil = mysqli_query($conn, "SELECT * FROM produk WHERE idproduk='$idproduk'");
    $tampil1 = mysqli_fetch_array($tampil);
    ?>
    <div class="row">
        <div class="col-5">
            <!-- ambil data dari produk yang namanya images -->
            <img src="<?php echo $tampil1['images']; ?>" width="80%">
        </div>
        <div class="col-7 produk_detail">
            <!-- ambil data dari database produk yang namanya namaproduk -->
            <h3><?php echo $tampil1['namaproduk']; ?></h3><br>
            <table width="100%" cellpadding="5" cellspacing="0">
                <tr>
                    <td width="20%">Harga</td>
                    <td>
                        <!-- ambil data dari database produk yg namanya harga -->
                        : Rp. <?php echo number_format($tampil1['harga']); ?><br>
                    </td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td>
                        <!-- ambil data dari database produk yang namanya stok -->
                        : <?php echo $tampil1['stok']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td>
                        : <?php echo $tampil1['berat']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Pilihan Warna</td>
                    <td>
                        : <?php echo $tampil1['pilihanwarna']; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php echo $tampil1['deskripsi']; ?>
                    </td>
                </tr>
            </table><br>
            <a href="" class="form_button2">Add to Cart</a>

        </div>
    </div>

    <div class="produk_deskripsi">
        <?php echo $tampil1['keterangan']; ?>
    </div>
</div>