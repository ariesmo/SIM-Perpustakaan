<legend><?= $title;?></legend>
<?= validation_errors();?>
<?= $message;?>

	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-lg-3 control-label">Username</label>
			<div class="col-lg-5">
				<input type="hidden" name="id" value="<?= $petugas['id_petugas'];?>">
				<input type="text" name="user" value="<?= $petugas['id_user'];?>" readonly="readonly" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label">Password</label>
			<div class="col-lg-5">
				<input type="password" name="password" class="form-control" value="<?= $petugas['password'];?>">
			</div>
		</div>
		<div class="form-group well">
			<div class="col-lg-5">
				<button id="simpan" class="btn btn-primary"><i class="glyphicon glyphicon-saved"></i>Simpan</button>
				<a href="<?= site_url('dashboard/petugas');?>" class="btn btn-default">Kembali</a>
			</div>
		</div>
	</form>