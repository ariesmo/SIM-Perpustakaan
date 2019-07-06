<table class="table table-striped">
	<thead>
		<tr>
			<td>Kode Buku</td>
			<td>Judul Buku</td>
			<td>Pengarang</td>
			<td></td>
		</tr>
	</thead>
	<?php foreach($tmp as $tmp);?>
		<tr>
			<td><?= $tmp->kode_buku;?></td>
			<td><?= $tmp->judul;?></td>
			<td><?= $tmp->pengarang;?></td>
			<td><a href="#" class="hapus" kode="<?= $tmp->kode_buku;?>">
				<i class="glyphicon glyphicon-plus"></i></a></td>
		</tr>
	<?php endforeach;?>
		<tr>
			<td colspan="2">Total Buku</td>
			<td colspan="2"><input type="text" id="jumlahTmp" readonly="readonly" value="<?= $jumlahTmp;?>" class="form-control"></td>
		</tr>	
</table>