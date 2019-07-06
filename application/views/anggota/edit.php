<legend><?= $title;?></legend>
<?= validation_errors();?>
<?= $message;?>

	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-lg-2 control-label">Nis</label>
			<div class="col-lg-5">
				<input type="text" name="nis" class="form-control" value="<?= $anggota['nis'];?>" readonly="readonly">
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label">Nama</label>
			<div class="col-lg-5">
				<input type="text" name="nama" class="form-control" value="<?= $anggota['nama'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label">Jenis Kelamin</label>
			<div class="col-lg-5">
				<select name="jk" class="form-control">
					<option value="<?= $anggota['jk'];?>"><?= $anggota['jk'];?></option>
					<option value="L">L</option>
					<option value="P">P</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label">Tanggal Lahir</label>
			<div class="col-lg-5">
				<input type="text" name="ttl" id="tanggal" class="form-control" value="<?= $anggota['ttl'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label">Kelas</label>
			<div class="col-lg-5">
				<input type="text" name="kelas" class="form-control" value="<?= $anggota['kelas'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label">Image</label>
			<div class="col-lg-5">
				<img src="<?= base_url('assets/img/anggota/'.$anggota['image']);?>" width="200px" height="200px">
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label"></label>
			<div class="col-lg-5">
				<input type="file" name="gambar">
			</div>
		</div>
		<div class="form-group well">
			<button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i>Update</button>
			<a href="<?= site_url('anggota');?>" class="btn btn-default">Kembali</a>
		</div>
	</form>