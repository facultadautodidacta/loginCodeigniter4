<?php namespace App\Models;
	use CodeIgniter\Model;

	class Usuarios extends Model {
		public function obtenerUsuario($data) {
			$Usuario = $this->db->table('t_usuario');
			$Usuario->where($data);
			return $Usuario->get()->getResultArray();
		}
	}