<legend><?= $title;?></legend>
	<table class="table table-striped">
		<thead>
			<tr>
				<td>No.</td>
				<td>Nis</td>
				<td>Nama</td>
				<td>Tanggal Lahir</td>
				<td>Kelas</td>
			</tr>
		</thead>
		<?php $no=0; foreach($anggota as $row); $no++;?>
			<tr>
				<td><?= $no;?></td>
				<td><?= $row->nis;?></td>
				<td><?= $row->nama;?></td>
				<td><?= $row->ttl;?></td>
				<td><?= $row->kelas;?></td>
			</tr>
		<?php endforeach;?>
	</table>