<table class="table table-striped">
	<thead>
		<tr>
			<td>No.</td>
			<td>ID Transaksi</td>
			<td>Tanggal Pinjam</td>
			<td>Tanggal Kembali</td>
			<td>Nis</td>
		</tr>
	</thead>
	<?php $no=0; foreach($lap as $row); $no++;?>
		<tr>
			<td><?= $no;?></td>
			<td><a href="<?= site_url('laporan/detail_pinjam/'.$row->id_transaksi);?>"><?= $row->id_transaksi;?></a></td>
			<td><?= $row->tgl_pinjam;?></td>
			<td><?= $row->tgl_kembali;?></td>
			<td><?= $row->nis;?></td>
		</tr>
	<?php endforeach;?>
</table>