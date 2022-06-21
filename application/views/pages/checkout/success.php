<div class="container">
	<div class="row mt-4">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Checkout Success</h5>	
				<div class="card-body">
					<h4><strong>Order Number : <?= $content['invoice'] ?></strong></h4>
					<p>Terima Kasih Telah Belanja di RHYSTORE.</p>
					<br>
					<p>Silahkan Ikuti Petunjuk Berikut:</p>
					<ol>
						<li>Silahkan transfer ke rekening  <strong>BCA 0123456789</strong> A/n RHYSTORE</li>
						<li>Cantumkan Order Number <strong><?= $content['invoice'] ?></strong></li>
						<li>Total pembayaran <strong>Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></li>
					</ol>
					<p>Jika sudah transfer, tolong cantumkan bukti transfer <a href="<?= base_url('myorder/detail/' . $content['invoice']) ?>"> pada link berikut</a></p>
					<a href="<?= base_url('home') ?>" class="btn btn-primary btn-sm">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>
