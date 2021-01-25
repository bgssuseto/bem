<?php
class M_data extends CI_Model
{
	public function tampil_anggota()
	{
		return $this->db->get('anggota');
		$this->db->order_by('id', 'ASC');
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

	function get_custom($id)
	{
		return $this->db->get_where('slide', array('id' => $id))->row_array();
	}

	function inbox_del()
	{
		$this->db->empty_table('inbox');
	}
}
