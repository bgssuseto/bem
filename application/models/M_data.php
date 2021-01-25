<?php
class M_data extends CI_Model
{
	public function tampil_anggota()
	{
		return $this->db->get('anggota');
		$this->db->order_by('id', 'ASC');
	}

	public function tampil_slide($id)
	{
		return $this->db->get_where('slide', ['id' => $id])->row_array();
		$this->db->limit(1);
	}

	public function berita()
	{
		return $this->db->get('pengumuman')->result_array();
		$this->db->order_by('id_pengumuman', 'ASC');
		$this->db->limit(4);
	}

	function tampil_pesan()
	{
		return $this->db->get('inbox')->result_array();
		$this->db->order_by('id', 'ASC');
	}

	function hapuspesan($id)
	{

		$this->db->delete('inbox', array('id_pesan' => $id));
	}

	function inbox_del()
	{
		$this->db->empty_table('inbox');
	}
}
