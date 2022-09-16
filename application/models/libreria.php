<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class libreria extends CI_Model
{
    public function consulta_grupos($id)
    { 
        $query = $this->db->query("select name FROM groups g, users_groups ug where ug.group_id = g.id and ug.user_id=$id");
		if ($query->num_rows()>0)
			{
				return $query->result_array();
			}	
	}

}
?>