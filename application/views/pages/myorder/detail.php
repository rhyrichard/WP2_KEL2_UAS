<div class="container">
	<div class="row justify-content-center mt-4">
		<div class="col-6">
			<div class="card">
				<h5 class="card-header text-center"><strong>Orders Detail #<?= $order['invoice'] ?></strong></h5>
				<div class="card-body">
					<ul>
						<li>Tanggal : <?= $order['date'] ?></li>
						<li>Nama    : <?= $order['name'] ?></li>
						<li>NO. HP : <?= $order['phone'] ?></li>
						<li>Alamat  : <?= $order['address'] ?></li>
						<li>Status  : 
							<?php if($order['status'] == 'waiting') : ?>
								<span class="badge badge-primary"><?= $order['status'] ?></span>
							<?php elseif($order['status'] == 'paid') : ?>
								<span class="badge badge-warning text-light"><?= $order['status'] ?></span>
							<?php elseif($order['status'] == 'delivered') : ?>
								<span class="badge badge-info"><?= $order['status'] ?></span>
							<?php elseif($order['status'] == 'cancel') : ?>
								<span class="badge badge-danger"><?= $order['status'] ?></span>
							<?php endif; ?>
						</li>
					</ul>

					<hr>
					<div class="text-center text-info">
						<small class="text-dark">Jika ada kesulitan, Silahkan contact kami.</small>
						<br>
						<small>richard.adam112@gmail.com | 081219606767</small>
					</div>

					<?php if($order['status'] == 'waiting') : ?>
						<form action="<?= base_url('myorder/confirm/' .  $order['invoice']) ?>" method="POST">
							<button type="submit" class="btn btn-info btn-sm float-right">Konfirmasi Pembayaran</button>
						</form>
					<?php endif ?>

				</div>
			</div>
		</div>
	</div>
</div>
