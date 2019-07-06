<legend><?= $title;?></legend>
	<table class="table table-striped">
		<thead>
			<tr>
				<td>No.</td>
				<td>Kode Buku</td>
				<td>Judul</td>
				<td>Pengarang</td>
				<td>Klasifikasi</td>
			</tr>
		</thead>
		<?php $no=0; foreach($buku as $row); $no++;?>
			<tr>
				<td><?= $no;?></td>
				<td><?= $row->kode_buku;?></td>
				<td><?= $row->judul;?></td>
				<td><?= $row->pengarang;?></td>
				<td><?= $row->Klasifikasi;?></td>
			</tr>
		<?php endforeach;?>
	</table>