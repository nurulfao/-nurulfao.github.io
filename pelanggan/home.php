<div class="container">
	<div class="page-header">
		<h2>Mobil <small>data mobil!</small></h2>
	</div>
	<div class="row">
		<?php $query = $connection->query("SELECT * FROM mobil"); while ($row = $query->fetch_assoc()): ?>
			<div class="col-xs-6 col-md-3">
				<div class="thumbnail">
					<a href="assets/img/<?=$row['gambar']?>" class="fancybox">
			      <img src="assets/img/<?=$row['gambar']?>" style="height:250px; width:100%" alt="<?=$row['judul']?>">
			    </a>
		      <div class="caption text-center">
		        <h4><?=$row["nama_mobil"]?></h4>
		        <h5>Rp.<?=$row["harga"]?>,-</h5>
						<span class="label label-<?=($row['status']) ? "success" : "danger" ?>"><?=($row['status']) ? "Tersedia" : "Tidak Tersedia" ?></span>
		        <p><br>
							<a href="#" class="btn btn-primary">Sewa Sekarang!</a>
						</p>
		      </div>
		    </div>
		  </div>
		<?php endwhile; ?>
	</div>
</div>

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
