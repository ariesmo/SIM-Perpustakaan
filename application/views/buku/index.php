<div class="nav navbar-nav navbar-right">
	<form class="navbar-form navbar-left" role="search" action="<?= site_url('buku/cari');?>" method="post">
		<div class="form-group">
			<label>Cari Kode / Judul Buku</label>
			<input type="text" class="form-control" placeholder="Search" name="cari">
			<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i>Cari</button>
		</div>
	</form>
</div>
<a href="<?= site_url('buku/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Tambah</a>
<hr>
<?= $message;?>
<table class="table table-striped">
	<thead>
		<tr>
			<td>No.</td>
			<td>Image</td>
			<td>Kode Buku</td>
			<td>Judul</td>
			<td>Pengarang</td>
			<td>Klasifikasi</td>
			<td colspan="2"></td>
		</tr>	
	</thead>
	<?php $no=0; foreach($buku as $row) : $no++;?>
		<tr>
			<td><?= $no;?></td>
			<td><img src="<?= base_url('assets/img/'.$row->image);?>" height="100px" width="100px"></td>
			<td><?= $row->kode_buku;?></td>
			<td><?= $row->judul;?></td>
			<td><?= $row->pengarang;?></td>
			<td><?= $row->klasifikasi;?></td>
			<td><a href="<?= site_url('buku/edit/'.$row->kode_buku);?>"><i class="glyphicon glyphicon-edit"></i></a></td>
			<td><a href="#" class="hapus" kode="<?= $row->kode_buku;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
		</tr>
	<?php endforeach;?>
</table>
	<?= $pagination;?>

<script type="text/javascript">
	$(function(){
		$(".hapus").click(function(){
			var kode = $(this).attr("kode");

			$("#idhapus").val(kode);
			$("#myModal").modal("show");
		});

		$("#konfirmasi").click(function(){
			var kode = $("#idhapus").val();

			$.ajax({
				url: "<?= site_url('buku/hapus');?>",
				type: "POST",
				data:"kode="+kode,
				cache: false,
				success:function(html){
					location.href="<?= site_url('buku/index/delete_success');?>";
				}
			});
		});
	});
</script>