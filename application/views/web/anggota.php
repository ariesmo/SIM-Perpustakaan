<!doctype html>
<html>
	<head>
		<title>Perpustakaan</title>
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
		<link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.css');?>">
		<link rel="stylesheet" href="<?= base_url('assets/plugins/morris/morris.css');?>">
		<link rel="stylesheet" href="<?= base_url('assets/plugins/timeline.css');?>">
		<script src="<?= base_url('assets/js/jquery.js');?>"></script>
		<script src="<?= base_url('assets/js/bootstrap.js');?>"></script>
		<script src="<?= base_url('assets/plugins/tinymce/tinymce.min.js');?>"></script>
		<script>
			tinymce.init({selector:'textarea'});
		</script>
	</head>
	<body>
		<div class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= site_url('web');?>">Perpustakaan</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="<?= site_url('web');?>"><i class="glyphicon glyphicon-home"></i>Home</a></li>
						<li class="active"><a href="<?= site_url('web/anggota');?>"><i class="glyphicon glyphicon-user"></i>Anggota</a></li>
					</ul>
					<div class="nav navbar-nav navbar-right">
						<form class="navbar-form navbar-left" role="search" action="<?= site_url('web/cari_anggota');?>" method="post">
							<div class="form-group">
								<input type="text" name="cari" class="form-control" placeholder="Cari Anggota">
							</div>
							<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i>Cari</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-look"></span>
							Login
						</div>
						<div class="panel-body">
							<form class="form-horizontal" role="form" action="<?= site_url('web/proses');?>" method="post"><?= $this->session->flashdata('message');?>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Username</label>
									<div class="col-sm-9">
										<input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-3 control-label">Password</label>
									<div class="col-sm-9">
										<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<div class="checkbox">
											<label><input type="checkbox">Remember me</label>
										</div>
									</div>
								</div>
								<div class="form-group last">
									<div class="col-sm-offset-3 col-sm-9">
										<button type="submit" class="btn btn-success btn-sm">Sign in</button>
										<button type="reset" class="btn btn-default btn-sm">Reset</button>
									</div>
								</div>
							</form>
						</div>
						<div class="panel-footer">
							
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<legend>Data Anggota</legend>
					<table class="table table-stripped">
						<thead>
							<tr>
								<td>No.</td>
								<td>Image</td>
								<td>Nis</td>
								<td>Nama</td>
								<td>Tanggal Lahir</td>
								<td>Kelas</td>
							</tr>
						</thead>
						<?php $no=0; foreach($anggota as $row) : $no++;?>
							<tr>
								<td><?= $no;?></td>
								<td><img src="</= base_url('assets/img/anggota/'.$row->image);?>" width="100px" height="100px"></td>
								<td><?= $row->nis;?></td>
								<td><?= $row->nama;?></td>
								<td><?= $row->ttl;?></td>
								<td><?= $row->kelas;?></td>
							</tr>
						<?php endforeach;?>
					</table>
				</div>
			</div>
		</div>

		<script src="<?= base_url('assets/plugins/holder/holder.js');?>"></script>
		<script src="<?= base_url('assets/js/application.js');?>"></script>
		<script src="<?= base_url('assets/js/jquery-1.10.2.js');?>"></script>
		<script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
		<script src="<?= base_url('assets/plugins/metisMenu/dist/metisMenu.js');?>"></script>
		<script src="<?= base_url('assets/plugins/raphael/raphael.js');?>"></script>
		<script src="<?= base_url('assets/plugins/morris/morris.js');?>"></script>
		<script src="<?= base_url('assets/js/sb-admin.js');?>"></script>
		<script src="<?= base_url('assets/js/demo.js');?>"></script>
	</body>
</html>