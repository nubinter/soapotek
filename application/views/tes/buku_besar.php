
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Buku Besar</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
		<div class="row">
			<h4>Buku Besar Kas</h4>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Debet</th>
                    <th scope="col">Kredit</th>
                    <th scope="col">Saldo Debet</th>
                    <th scope="col">Saldo Kredit</th>
						</tr>
					</thead>

					<?php 
          $sn = 1;
          $saldo_d = '';
          $saldo_k = '';
           ?>
					<tbody>
          <?php foreach($buku_besar_kas as $c){ 
					$saldo_d = (int)$saldo_d+(int)$c->debet-(int)$c->kredit;
		  ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo date('d F Y',strtotime($c->tanggal)); ?></td>
							<td><?php echo $c->keterangan ?></td>
							<td><?php echo $c->debet ?></td>
							<td><?php echo $c->kredit ?></td>
							<td><?php echo $saldo_d ?></td>
							<td><?php  ?></td>
						</tr>
						<?php $sn++; ?>

						<?php } ?>
                  
					</tbody>
				</table>
			</div>
			<div class="row">
				<h4>Buku Besar Persediaan Barang</h4>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Debet</th>
                    <th scope="col">Kredit</th>
                    <th scope="col">Saldo Debet</th>
                    <th scope="col">Saldo Kredit</th>
						</tr>
					</thead>

					<?php 
          $sn = 1;
          $saldo_d = '';
          $saldo_k = '';
           ?>
					<tbody>
          <?php foreach($buku_besar_persediaan as $c){ 
					$saldo_d = (int)$saldo_d+(int)$c->debet-(int)$c->kredit;
		  ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo date('d F Y',strtotime($c->tanggal)); ?></td>
							<td><?php echo $c->keterangan ?></td>
							<td><?php echo $c->debet ?></td>
							<td><?php echo $c->kredit ?></td>
							<td><?php echo $saldo_d ?></td>
							<td><?php  ?></td>
						</tr>
						<?php $sn++; ?>

						<?php } ?>
                  
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
</div>



