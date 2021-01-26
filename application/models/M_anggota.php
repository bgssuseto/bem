<?php
class M_anggota extends CI_Model
{
	function tampilanggota()
	{
		return  $this->db->get('anggota');
	}

	function hapus_angg($id)
	{
		$row = $this->db->where(array('id' => $id))->get('anggota')->row_array();
		$this->db->delete('anggota', array('id' => $id));
		unlink('./assets/img/team/' . $row['gambar']);
	}

	function edit_angg($id)
	{

		return $this->db->get_where('anggota', array('id' => $id))->row_array();
	}

	function aksi_update($id, $data)
	{
		$this->db->set($data);
		return $this->db->update('anggota', array('id' => $id));
	}
}
