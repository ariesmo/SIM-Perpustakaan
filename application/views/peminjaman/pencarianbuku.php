<table class="table table-striped">
	<thead>
		<tr>
			<td>Kode Buku</td>
			<td>Judul Buku</td>
			<td>Pengarang</td>
			<td></td>
		</tr>
	</thead>
	<?php foreach($buku as $tmp);?>
		<tr>
			<td><?= $tmp->kode_buku;?></td>
			<td><?= $tmp->judul;?></td>
			<td><?= $tmp->pengarang;?></td>
			<td><a href="#" class="tambah" kode="<?= $tmp->kode_buku;?>"
				judul="<?= $tmp->judul;?>"
				pengarang="<?= $tmp->pengarang;?>"><i class="glyphicon glyphicon-plus"></i></a></td>
		</tr>
	<?php endforeach;?>
</table>