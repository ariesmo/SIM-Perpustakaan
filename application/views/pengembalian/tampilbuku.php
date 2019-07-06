<table class="table table-striped">
	<thead>
		<tr>
			<td>Kode Buku</td>
			<td>Judul Buku</td>
			<td>Pengarang</td>
			<td></td>
		</tr>
	</thead>
	<?php foreach($buku as $row);?>
		<tr>
			<td><?= $row->kode_buku;?></td>
			<td><?= $row->judul;?></td>
			<td><?= $row->pengarang;?></td>
		</tr>
	<?php endforeach;?>	
</table>