<div id="tampil"></div>
<<script>
	$(function(){
		$("#tampil").load("<?= site_url('coba/tampilData');?>");
		$("#hapus").live("click",function(){
			alert("Yakin dihapus?");
		});
	})
</script>