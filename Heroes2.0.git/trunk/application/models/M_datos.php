<?php 

class M_datos extends CI_Model {

	function __construct(){
        parent::__construct();
    }

    function verificaUsuario($email) {
        $sql = "SELECT * 
                  FROM users
                 WHERE email LIKE ?";
        $result = $this->db->query($sql, array($email));
        return $result->result();
    }
	function insertHeroe($arrayInsert, $tabla){
		$this->db->insert($tabla, $arrayInsert);
        $sql = $this->db->insert_id();
        if($this->db->affected_rows() != 1) {
            throw new Exception('Error al insertar');
            $data['error'] = EXIT_ERROR;
        }
        return array("error" => EXIT_SUCCESS, "msj" => MSJ_INS);
	}
}