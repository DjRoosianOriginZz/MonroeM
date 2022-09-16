<?php if ( ! defined('BASEPATH')) exit('No se permite el acceso directo al script');
class libreriademo
{
    /*public function __construct()
    {
    $this->load->library('ion_auth');
    }*/
    
    public function grupo_usuario()
    {
        $CI =& get_instance();
        $CI->load->library('ion_auth');
        $user =$CI->ion_auth->user()->row();
        $id=$user->id;
        $CI->load->model('libreria');
        $datos=$CI->libreria->consulta_grupos($id);
        return $datos;
    }

    public function comprobar_gerente()
    {
        $grupo=$this->grupo_usuario();
        $nombre= $grupo[0]['name'];
        if($nombre=="gerente")
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    public function comprobar_admin()
    {
        $grupo=$this->grupo_usuario();
        $nombre= $grupo[0]['name'];
        if($nombre=="admin")
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    public function comprobar_usuario()
    {
        $grupo=$this->grupo_usuario();
        $nombre= $grupo[0]['name'];
        if($nombre=="members")
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