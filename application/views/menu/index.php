<div id="menu" class="menu">
	<div class="container">
		<div class="row mt-5">
			<?php foreach ($menu as $m) : ?>
				<div class="col-lg-3">
					<div class="shadow p-3 mb-5 bg-white">
						<img src="<?= base_url('assets/img/menu/'.$m['kategori'].'/') . $m['image']; ?>" class="img-fluid">
						<div class="text-center mt-3">
							<h5><?= $m['nama']; ?></h5>
							<p>IDR <?= number_format($m['harga'],2,',','.'); ?></p>
							<a href="<?= base_url('menu/pesan/'.$m['id']); ?>" class="btn btn-pesan">Pesan</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="row justify-content-center mt-2">
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>

<!-- Ukuran Foto 26,81 x 17,89 -->

<!-- <div id="menu" class="menu">
	<div class="container">
		<nav class="nav nav-pills nav-fill">
		  <a class="nav-item nav-link active" id="pills-makanan" data-toggle="pill" href="#makanan">Makanan</a>
		  <a class="nav-item nav-link" id="pills-minuman" data-toggle="pill" href="#minuman">Minuman</a>
		</nav>
		<div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade show active" id="makanan" role="tabpanel" aria-labelledby="pills-makanan">
				<div class="row mt-5">
					<?php //foreach ($makanan as $m) : ?>
						<?php //if($m['kategori'] == 'makanan') : ?>
						<div class="col-lg-3">
							<div class="shadow p-3 mb-5 bg-white">
								<img src="<?//= base_url('assets/img/menu/'.$m['kategori'].'/') . $m['image']; ?>" class="img-fluid">
								<div class="text-center mt-3">
									<h5><?//= $m['kopi']; ?></h5>
									<p>IDR <?//= number_format($m['harga'],2,',','.'); ?></p>
									<a href="<?//= base_url('menu/pesan/') . $m['id']; ?>" class="btn btn-pesan">Pesan</a>
								</div>
							</div>
						</div>
						<?php //endif ?>
					<?php //endforeach; ?>
				</div>
				<div class="row justify-content-center mt-2">
					<?//= $this->pagination->create_links(); ?>
				</div>
			</div>
		  <div class="tab-pane fade" id="minuman" role="tabpanel" aria-labelledby="pills-minuman">
				<div class="row mt-5">
					<?php //foreach ($minuman as $m) : ?>
						<?php //if($m['kategori'] == 'minuman') : ?>
						<div class="col-lg-3">
							<div class="shadow p-3 mb-5 bg-white">
								<img src="<?//= base_url('assets/img/menu/'.$m['kategori'].'/') . $m['image']; ?>" class="img-fluid">
								<div class="text-center mt-3">
									<h5><?//= $m['kopi']; ?></h5>
									<p>IDR <?//= number_format($m['harga'],2,',','.'); ?></p>
									<a href="<?//= base_url('menu/pesan/') . $m['id']; ?>" class="btn btn-pesan">Pesan</a>
								</div>
							</div>
						</div>
						<?php //endif ?>
					<?php //endforeach; ?>
				</div>
				<div class="row justify-content-center mt-2">
					<?//= $this->pagination->create_links(); ?>
				</div>
			</div>
		</div>
	</div>
</div> -->
