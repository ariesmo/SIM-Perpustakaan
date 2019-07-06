<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
				<span class="glyphicon glyphicon-folder-close"></span>
				Master</a>
			</h4>
		</div>
		<div id="collapseOne" class="penel-collapse collapse in">
			<div class="panel-body">
				<table class="table">
					<tr>
						<td>
							<span class="glyphicon glyphicon-pencil text-primary"></span>
							<a href="<?= site_url('anggota');?>">Anggota</a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="glyphicon glyphicon-book text-success"></span>
							<a href="<?= site_url('buku');?>">Buku</a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="glyphicon glyphicon-user"></span>
							<a href="<?= site_url('dashboard/petugas');?>">Petugas</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
				<span class="glyphicon glyphicon-th"></span>
				Transaksi</a>
			</h4>
		</div>
		<div id="collapseTwo" class="penel-collapse collapse">
			<div class="panel-body">
				<table class="table">
					<tr>
						<td>
							<span class="glyphicon glyphicon-saved"></span>
							<a href="<?= site_url('peminjaman');?>">Peminjaman</a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="glyphicon glyphicon-save"></span>
							<a href="<?= site_url('pengembalian');?>">Pengembalian</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
				<span class="glyphicon glyphicon-file"></span>
				Laporan</a>
			</h4>
		</div>
		<div id="collapseFour" class="penel-collapse collapse">
			<div class="panel-body">
				<table class="table">
					<tr>
						<td>
							<span class="glyphicon glyphicon-user"></span>
							<a href="<?= site_url('laporan/anggota');?>">Data Anggota</a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="glyphicon glyphicon-book"></span>
							<a href="<?= site_url('laporan/buku');?>">Data Buku</a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="glyphicon glyphicon-tasks"></span>
							<a href="<?= site_url('laporan/peminjaman');?>">Data Peminjaman</a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="glyphicon glyphicon-list-alt"></span>
							<a href="<?= site_url('laporan/pengembalian');?>">Data Pengembalian</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a href="<?= site_url('dashboard/logout');?>">
				<span class="glyphicon glyphicon-off"></span>
				Logout</a>
			</h4>
		</div>
	</div>	
</div>