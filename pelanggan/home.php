<div class="page-header">
	<h2><img src="assets/img/logo.png" width="10%" alt="" srcset="">RENTAL MOBIL ABC </h2><br><br>
</div>
<!-- About Us  -->
<div class="page-about">
	<h2 text align="center">About Us</h2><br><br>

	<h4>PT.ABC adalah Perusahaan Jasa Sewa Mobil Murah di kota Depok, Jawa Barat. Kami Hadir menjadi pilihan yang terbaik dalam solusi transportasi anda. Kami memiliki tenaga sopir yang ramah dan sangat terampil di bidangnya, Membuat anda akan selalu merasa nyaman Rental Mobil Jayapura Juga menetapkan harga yang sangat bersahabat. Semua itu tidak lain agar anda puas terhadap pelayanan kami.</h4><br><br><br>
</div>


<!-- product  -->
<div class="row">
	<h2 text align="center"> Product </h2><br><br>
	<?php $query = $connection->query("SELECT * FROM mobil JOIN jenis USING(id_jenis)"); while ($row = $query->fetch_assoc()): ?>
		<div class="col-xs-6 col-md-3">
			<div class="thumbnail">
				<a href="assets/img/mobil/<?=$row['gambar']?>" class="fancybox">
				<img src="assets/img/mobil/<?=$row['gambar']?>" style="height:250px; width:100%" alt="<?=$row['judul']?>">
			</a>
	      <div class="caption text-center">
	        <h4><?=$row["nama_mobil"]?></h4>
	        <h5>Rp.<?=$row["harga"]?>,- <?=$row["nama"]?> - <?=$row["merk"]?></h5>
	        <h6><?=$row["no_mobil"]?></h6>
			<span class="label label-<?=($row['status']) ? "success" : "danger" ?>"><?=($row['status']) ? "Tersedia" : "Tidak Tersedia" ?></span>
	        <p>
				<br>
				<a href="<?=($row['status']) ? "?page=transaksi&id=$row[id_mobil]" : "#" ?>" class="btn btn-primary" <?=($row['status']) ?: "disabled" ?>>Sewa Sekarang!</a>
			</p>
	      </div>
	    </div>
	  </div>
	<?php endwhile; ?>
</div><br><br>

<!-- contact us  -->

   <div class="">
   	<h2 text align="center">Contac Us</h2>
   	<h3> Hubungi Kami : </h3>
   	<h2>Untuk Pemesana dan Informasi Lengkap. Silakan Telepon Kontak Kami di Bawah ini. </h2><br><br>

   	<h1>Telepon/ WA: 081370864382</h1>
   	<h4>Alamat: Jln Cawang No 12. Jakarta Timur</h4>
   </div> <br><br>


<script type="text/javascript">
$(document).ready(function(){
	$(".fancybox").fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		iframe : {
			preload: false
		}
	});
	$(".various").fancybox({
		maxWidth    : 800,
		maxHeight    : 600,
		fitToView    : false,
		width        : '70%',
		height        : '70%',
		autoSize    : false,
		closeClick    : false,
		openEffect    : 'none',
		closeEffect    : 'none'
	});
	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
});
</script>
