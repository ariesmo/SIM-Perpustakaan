<?php
class M_laporan extends CI_Model{
	function semuaAnggota(){
		return $this->db->get("anggota");
	}

	function semuaBuku(){
		return $this->db->get("buku");
	}

	function detailpeminjaman($tanggal1,$tanggal2){
		return $this->db->query("select * from transaksi where tanggal_pinjam between '$tanggal1' and '$tanggal2' group by id_transaksi");
	}

	function detail_pinjam($id){
		$this->db->select("'");
		$this->db->from("transaksi");
		$this->db->where("id_tranaksi",$id);
		$this->db->join("buku","buku.kode_buku=transaksi.kode_buku");
		return $this->db->get();
	}

	function detailpengembalian($tanggal1,$tanggal2){
		return $this->db->query("select * from pengembalian where tgl_pengembalian between '$tanggal1' and '$tanggal2' group by id_transaksi");
	}
}