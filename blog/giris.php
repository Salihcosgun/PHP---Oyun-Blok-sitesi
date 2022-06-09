<?php include 'inc/header.php'; ?>
<div class="container mt-5">
	<div class="card">
		<div class="card-header">Giriş Yap
			<p align="center"><?= isset($message) ? $message : null; ?></p>
		</div>
		<div class="card-body">
			<form name="my-form" action="giris.php?do=login" method="GET">

				<div class="form-group row">
					<label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Adresiniz</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="email" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="sifre" class="col-md-4 col-form-label text-md-right">Şifreniz</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="sifre" required>
					</div>
				</div>

				<div class="col-md-6 offset-md-4">
					<button type="submit" name="giris" class="btn btn-primary">
						Giriş Yap
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
<?php include 'inc/footer.php'; ?>