<?php
class M_anggota extends CI_Model
{
	function tampilanggota()
	{
		return  $this->db->get('anggota');
	}

	function hapus_angg($id)
	{
		$this->db->delete('anggota', array('id' => $id));
	}

	function edit_angg($id)
	{

		return $this->db->get_where('anggota', array('id' => $id))->row_array();
	}
}
