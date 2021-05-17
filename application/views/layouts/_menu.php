<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url(); ?>">Ladhidh Restoran</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
			aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link <?= ($title == 'Home') ? 'active' : ''; ?> mr-3" href="<?= base_url(); ?>">Home</a>
				<a class="nav-item nav-link <?= ($title == 'Menu') ? 'active' : ''; ?> mr-3" href="<?= base_url('menu'); ?>">Menu</a>
				<a class="nav-item nav-link <?= ($title == 'Pesanan') ? 'active' : ''; ?>" href="<?= base_url('pesanan'); ?>">
					Pesanan (<span><?= $notif_pesanan; ?></span>)
				</a>
			</div>
		</div>
	</div>
</nav>
<!-- End Navbar -->
