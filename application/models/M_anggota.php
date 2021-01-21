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

	function anggota($data)
	{
		$this->db->insert('anggota', $data);
		var_dump($this->db->insert('anggota', $data));
		die();
	}
}
