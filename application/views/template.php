<!doctype html>
<html>
	<head>
		<title> Aplikasi Perpustakaan | <?= $title;?></title>
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
		<link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.css');?>">
		<link rel="stylesheet" href="<?= base_url('assets/plugins/morris/morris.css');?>">
		<link rel="stylesheet" href="<?= base_url('assets/plugins/timeline.css');?>">
		<link rel="stylesheet" href="<?= base_url('assets/plugins/datepicker/css/datepicker.css');?>">
		<script src="<?= base_url('assets/js/jquery-1.8.3.min.js');?>"></script>
		<script src="<?= base_url('assets/js/bootstrap.js');?>"></script>
		<script src="<?= base_url('assets/plugins/tinymce/tinymce.js');?>"></script>
		<script>
			tinymce.init({selector:'textarea'});

			$(function(){
				$("#tanggal1").datepicker({
					format:'yyyy-mm-dd'
				});

				$("#tanggal2").datepicker({
					format:'yyyy-mm-dd'
				});

				$("#tanggal").datepicker({
					format:'yyyy-mm-dd'
				});
			})
		</script>
	</head>
	<body>
		<?php $this->load->view('template/header');?>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php $this->load->view('template/sidebar');?>
				</div>
				<div class="col-md-9">
					<?= $contents;?>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModelLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Konfirmasi</h4>
					</div>
					<div class="modal-body">
						<input type="hidden" name="idhapus" id="idhapus">
						<p>Apakah anda yakin ingin menghapus data ini ?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" id="konfirmasi">Hapus</button>
					</div>	
				</div>
			</div>
		</div>

		<script src="<?= base_url('assets/plugins/holder/holder.js');?>"></script>
		<script src="<?= base_url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
		<script src="<?= base_url('assets/js/application.js');?>"></script>
		<script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
		<script src="<?= base_url('assets/plugins/metisMenu/dist/metisMenu.js');?>"></script>
		<script src="<?= base_url('assets/plugins/raphael/raphael.js');?>"></script>
		<script src="<?= base_url('assets/plugins/morris/morris.js');?>"></script>
		<script src="<?= base_url('assets/js/sb-admin.js');?>"></script>
		<script src="<?= base_url('assets/js/demo.js');?>"></script>
	</body>
</html>