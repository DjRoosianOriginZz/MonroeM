<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model extends CI_Model
{
    public function consulta_nuevo()
	{
		$query = $this->db->query("select o.descripcion, o.imagen, o.nombre FROM obras o, recorrido r where r.fecha=o.fecha");
		if($query->num_rows() > 0)
			{
			return $query->result();
			}
	}

    public function consulta_galeria()
	{
		$query = $this->db->query("select descripcion, img, nombre, fecha FROM obras");
		if($query->num_rows() > 0)
			{
			return $query->result();
			}
	}

    public function consulta_visita()
	{
		$query = $this->db->query("select mv.fecha, mv.descripcion, g.nombre, g.apellido, g.email, g.idioma FROM museo_visita mv, guia g where mv.id_guia=g.id_guia");
		if($query->num_rows() > 0)
			{
			return $query->result();
			}
	}

    public function consulta_recorrido($id)
	{
		$query = $this->db->query("select mv.fecha, mv.descripcion, g.nombre, g.apellido, g.email, g.idioma FROM recorrido r, users u, museo_visita mv, guia g where r.id_user=u.id and r.id_visita=mv.id_visita and mv.id_guia=g.id_guia and u.id=$id");
		if($query->num_rows() > 0)
			{
			return $query->result();
			}
	}

    public function consulta_guia()
	{
		$query = $this->db->query("select nombre, apellido, email, idioma FROM guia");
		if($query->num_rows() > 0)
			{
			return $query->result();
			}
	}

    public function cargar_obra($dato, $dato2, $dato3, $dato4)
    { 
		$query=$this->db->query("insert into obras (nombre, fecha, desc, imagen) values ('$dato','$dato2','$dato3','$dato4')");
		 if ($query==1)
		 {
			 return 1;
		 }
		 else
		 {
			 return 0;
		 }
	}

    public function ag_visita()
	{
		$query = $this->db->query("select FROM");
		if($query->num_rows() > 0)
			{
			return $query->result();
			}
	}

	public function consulta_gente()
	{
		$query = $this->db->query("select first_name, last_name, dni, email, id FROM users");
		if($query->num_rows() > 0)
			{
			return $query->result();
			}
	}

	public function nuevo_guia($dato, $dato2, $dato3, $dato4, $dato5)
    { 
       $query=$this->db->query("insert into guia (nombre, apellido, email, dni, idioma) values ('$dato','$dato2','$dato3','$dato4','$dato5')");
		if ($query==1)
		{
			return 1;

		}
		else 
		{
			return 0;
		
		}
	}

	public function nueva_visita($dato, $dato2, $dato3)
    { 
       $query=$this->db->query("insert into guia (fecha,descripcion,id_guia) values ('$dato','$dato2','$dato3')");
		if ($query==1)
		{
			return 1;

		}
		else 
		{
			return 0;
		
		}
	}
}
?>