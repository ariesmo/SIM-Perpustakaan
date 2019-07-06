<script type="text/javascript">
	$(function(){
		function loadData(args){
			//code
			$("#tampil").load("<?= site_url('peminjaman/tampil');?>");
		}
		loadData();

		function kosong(args){
			//code
			$("#kode").val('');
			$("#judul").val('');
			$("#pengarang").val('');
		}

		$("#nis").click(function(){
			var nis = $("#nis").val();

			$.ajax({
				url: "<?= site_url('peminjaman/cariAnggota');?>",
				type: "POST",
				data: "nis="+nis,
				cache: false,
				success:function(html){
					$("#nama").val(html);
				}
			})
		})
	})

	$("#kode").keypress(function(){
		var keycode = (event.keyCode ? event.keyCode : event.which);

		if(keycode == '13'){
			var kode = $("#kode").val();

			$.ajax({
				url: "<?= site_url('peminjaman/cariBuku');?>",
				type: "POST",
				data: "kode="+kode,
				cache: false,
				success:function(msg){
					data = msg.split("|");
					if(data==0){
						alert("data tidak ditemukan");
						$("#judul").val('');
						$("#pengarang").val('');
					} else {
						$("#judul").val(data[0]);
						$("#pengarang").val(data[1]);
						$("#tambah").focus();
					}
				}
			})
		}
	})

	$("#tambah").click(function(){
		var kode  	  = $("#kode").val();
		var judul 	  = $("#judul").val();
		var pengarang = $("#pengarang").val();

		if(kode==""){
			//code
			alert("Kode Buku Masih Kosong");
			return false;
		} else if(judul==""){
			//code
			alert("Data tidak ditemukan");
			return false;
		} else {
			$.ajax({
				url: "<?= site_url('peminjaman/tambah');?>",
				type: "POST",
				data: "kode="+kode+"&judul="+judul+"&pengarang="+pengarang,
				cache: false,
				success:function(html){
					loadData();
					kosong();
				}
			})
		}
	})

	$("#simpan").click(function(){
		var nomer   = $("#no").val();
		var pinjam  = $("#pinjam").val();
		var kembali = $("#kembali").val();
		var nis     = $("#nis").val();
		var jumlah	= parseInt($("#jumlahTmp").val(),10);

		if(nis==""){
			alert("Pilih Nis Siswa");
			return false;
		} else if(jumlah==0){
			alert("Pilih buku yang akan dipinjam");
			return false;
		} else {
			$.ajax({
				url: "<?= site_url('peminjaman/sukses');?>",
				type: "POST",
				data: "nomor="+nomer+"&pinjam"+pinjam+"&kembali="+kembali+"&nis="+nis+"&jumlah"+jumlah,
				cache: false,
				success:function(html){
					alert("Transaksi Peminjaman");
					location.reload();
				}
			})
		}
	})

	$("#hapus").live("click",function(){
		var kode = $(this).attr("kode");

		$.ajax({
			url: "<?= site_url('peminjaman/hapus');?>",
			type: "POST",
			data: "kode="+kode,
			cache: false,
			success:function(html){
				loadData();
			}
		});
	});

	$("#cari").click(function(){
		$("#myModal2").modal("show");
	})

	$("#caribuku").keyup(function(){
		var caribuku = $("#caribuku").val();

		$.ajax({
			url: "<?= site_url('peminjaman/pencarianbuku');?>",
			type: "POST",
			data: "caribuku="+caribuku,
			cache: false,
			success:function(html){
				$("#tampilbuku").html(html);
			}
		})
	})

	$(".tambah").live("click",function(){
		var kode 	  = $(this).attr("kode");
		var judul 	  = $(this).attr("judul");
		var pengarang = $(this).attr("pengarang");

		$("#kode").val(kode);
		$("#judul").val(judul);
		$("#pengarang").val(pengarang);

		$("#myModal2").modal("hide");
	})
</script>

<legend><?= $title;?></legend>
<div class="panel panel-default">
	<div class="panel-body">
		<form class="form-horizontal" action="<?= site_url('peminjaman/simpan');?>" method="post">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-4 control-label">No. Transaksi</label>
					<div class="col-lg-7">
						<input type="text" id="no" name="no" class="form-control" value="<?= $noauto;?>" readonly="readonly">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label">Tgl Pinjam</label>
					<div class="col-lg-7">
						<input type="text" id="pinjam" name="pinjam" class="form-control" value="<?= $tanggalpinjam;?>" readonly="readonly">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label">Tgl Kembali</label>
					<div class="col-lg-7">
						<input type="text" id="kembali" name="kembali" class="form-control" value="<?= $tanggalkembali;?>" readonly="readonly">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-4 control-label">Nis</label>
					<div class="col-lg-7">
						<select name="nis" class="form-control" id="nis">
							<option></option>
							<?php foreach($anggota as $anggota) : ?>
							<option value="<?= $anggota->nis;?>"><?= $anggota->nis?></option>
							<?php endforeach;?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label">Nama Siswa</label>
					<div class="col-lg-7">
						<input type="text" id="nama" name="nama" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label">Tgl Kembali</label>
					<div class="col-lg-7">
						<input type="text" id="kembali" name="kembali" class="form-control" value="<?= $tanggalkembali;?>" readonly="readonly">
					</div>
				</div>
			</div>
		</form>
	</div>	
</div>
<div class="panel panel-success">
	<div class="panel-heading">
		Data Buku
	</div>
	<div class="panel-body">
		<div class="form-inline">
			<div class="form-group">
				<label>Kode Buku</label>
				<input type="text" id="kode" class="form-control" placeholder="Kode Buku">
			</div>	
			<div class="form-group">
				<label class="sr-only">Judul</label>
				<input type="text" id="judul" class="form-control" placeholder="Judul Buku" readonly="readonly">
			</div>
			<div class="form-group">
				<label class="sr-only">Pengarang</label>
				<input type="text" id="pengarang" class="form-control" placeholder="Pengarang" readonly="readonly">
			</div>
			<div class="form-group">
				<label class="sr-only">Pengarang</label>
				<button id="tambah" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></button>
			</div>
			<div class="form-group">
				<label class="sr-only">Pengarang</label>
				<button id="cari" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</div>
		</div>
	</div>	
	<div id="tampil"></div>
	<div class="panel-footer">
		<button id="simpan" class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModelLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Cari Buku</h4>
			</div>
			<div class="modal-body">
				<div class="form-horizontal">
					<label class="col-lg-3 control-label">Cari Nama Buku</label>
					<div class="col-lg-5">
						<input type="text" name="caribuku" id="caribuku" class="form-control">
					</div>
				</div>
				<div id="tampilbuku"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="konfirmasi">Hapus</button>
			</div>
		</div>
	</div>
</div>
	