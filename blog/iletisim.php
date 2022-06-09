<?php include 'inc/header.php'; ?>

<div class="main-container">
	<main class="site-main">
		<div class="container-fluid no-left-padding no-right-padding contact-section"></div>
		<div class="container-fluid no-left-padding no-right-padding page-content">
			<div class="container">
				<div class="contact-info">
					<div class="block-title"><h3>İletişime Geç</h3></div>
					<p>Lorem Ipsum Nedir?
					Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</p><br><br>

					<div class="mb-3">
						<b><h4>Telefon: 05398261961</h4></b>
					</div>
				</div>
				<div class="contact-form">
					<h4 style="color: green;"><center><?=isset($_GET['adsoyad']) ? 'Mesajınız Gönderildi.' : ''?></center></h4>
					<form class="row" method="GET">
						<div class="col-md-6 form-group">
							<input type="text" class="form-control" placeholder="Adınız" name="adsoyad"  required>
						</div>
						<div class="col-md-6 form-group">
							<input type="text" class="form-control" placeholder="Email Adresiniz" name="email"  required>
						</div>
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" placeholder="Konu" name="konu" required >
						</div>
						<div class="col-md-12 form-group">
							<textarea class="form-control" placeholder="Mesajınız" rows="5" name="mesaj" required></textarea>
						</div>
						<div class="col-md-12 form-group no-bottom-margin">
							<button  name="submit" type="submit" class="submit">Gönder</button>
						</div>
						<div id="alert-msg" class="alert-msg"></div>
					</form>
				</div>
			</div>
		</div>
	</main>
</div>
<?php include 'inc/footer.php'; ?>