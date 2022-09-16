<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		if (!$this->ion_auth->logged_in())
            {
				$this->load->view('header');
				$this->load->view('principal');
			}
		else
			{
				$this->load->view('header');
				$this->load->view('principal');
			}
	}

	public function login()
	{
		if (!$this->ion_auth->logged_in())
            {
				$this->load->view('login');
			}
		else
			{
				$this->load->view('header');
				$this->load->view('principal');
			}
	}

	public function registro()
	{
		if (!$this->ion_auth->logged_in())
            {
				$this->load->view('registro');
			}
		else
			{
				$this->load->view('header');
				$this->load->view('principal');
			}
	}

	public function is()
	{
		$identity = $this->input->post("email");
        $password = $this->input->post("pass");
        if (!$this->ion_auth->login($identity, $password))
            {
                $this->load->view('header');
                $this->load->view('pp');
            }
        else
            {
                redirect('welcome');
            }
    }

	public function registrar()
	{
		$username=$this->input->post("nombre");
        $email=$this->input->post("email");
        $pass=$this->input->post("password");
        $additional_data = array
        (
            'first_name' => $this->input->post("nombre"),
            'last_name' => $this->input->post("apellido"),
            'dni' => $this->input->post("dni"),
        );
        $resultado =($this->ion_auth->register($username, $pass, $email, $additional_data));
        if ($resultado>0)
            {
                redirect('welcome');	
            }
        else
            {
                redirect('welcome/registro');
            }
	}

	public function logout()
    {
        $this->ion_auth->logout();
        redirect('welcome');
    }

	public function perfil()
    {
        if (!$this->ion_auth->logged_in())
            {
                $this->load->view('header');
                $this->load->view('pp');
            }
        else
            {
                $user= $this->ion_auth->user()->row();
				$this->load->model('model');
				$datos=$user->id;
                $datos2['recorrido']=$this->model->consulta_recorrido($datos);
                $this->load->view('header');
                $this->load->view('perfil', $datos2);
            }	
    }

	public function ver_nuevo()
    {
        if (!$this->ion_auth->logged_in())
            {
                $this->load->view('header');
                $this->load->view('pp');
            }
        else
            {
                $this->load->view('header');
                $this->load->view('nuevo_para_ti');
            }
    }

	public function ver_galeria()
    {
        if (!$this->ion_auth->logged_in())
            {
                $this->load->view('header');
                $this->load->view('pp');
            }
        else
            {
                $this->load->model('model');
                $datos['obras']=$this->model->consulta_galeria();
                $this->load->view('header');
                $this->load->view('galeria',$datos);
            }
    }

	public function ag_galeria()
    {
        if (!$this->ion_auth->logged_in())
            {
                $this->load->view('header');
                $this->load->view('pp');
            }
        else
            {
                $this->load->view('header');
                $this->load->view('agregar_galeria');
            }
    }

	public function ver_visitas()
    {
        if (!$this->ion_auth->logged_in())
            {
                $this->load->view('header');
                $this->load->view('pp');
            }
        else
            {
				$this->load->model('model');
                $datos['recorrido']=$this->model->consulta_visita();
                $this->load->view('header');
                $this->load->view('visitas',$datos);
            }
    }

	public function ag_visitas()
    {
        if (!$this->ion_auth->logged_in())
            {
                $this->load->view('header');
                $this->load->view('pp');
            }
        else
            {
                $this->load->model('model');
                $datos['guia']=$this->model->consulta_guia();
                $this->load->view('header');
                $this->load->view('agregar_visita', $datos);
            }
    }

	public function museo()
    {
        if (!$this->ion_auth->logged_in())
            {
                $this->load->view('header');
                $this->load->view('pp');
            }
        else
            {
                $this->load->view('header');
                $this->load->view('museo');
            }
    }

    public function ag_guia()
    {
        if (!$this->ion_auth->logged_in())
            {
                $this->load->view('header');
                $this->load->view('pp');
            }
        else
            {
                $this->load->view('header');
                $this->load->view('agregar_guia');
            }
    }

	public function users()
    {
        if (!$this->ion_auth->logged_in())
            {
                $this->load->view('header');
                $this->load->view('pp');
            }
        else
            {
                $this->load->model('model');
                $datos['gente']=$this->model->consulta_gente();
                $this->load->view('header');
                $this->load->view('lista_usuarios', $datos);
            }	
    }

    Public function deletear()
    {
        $id = $this->input->post("id");
        $this->ion_auth->delete_user($id);
        if (!$this->ion_auth->logged_in())
            {
                $this->load->view('header');
                $this->load->view('pp');
            }
        else
            {
                redirect('welcome');
            }
    }

    Public function emplear()
    {
        $this->load->model("model");
        $id = $this->input->post("id");
        $empleado="3";
        $result['emplear']=$this->modelo->emplear($id, $empleado);
        if (!$this->ion_auth->logged_in())
            {
                $this->load->view('header');
                $this->load->view('pp');
            }
        else
            {
                redirect('welcome');
            }
    }

    public function nuevo_guia()
	{
		$dato=$this->input->post("nombre");
		$dato2=$this->input->post("apellido");
		$dato3=$this->input->post("mail");
		$dato4=$this->input->post("dni");
        $dato5=$this->input->post("idioma");
		$this->load->model("model");
		$result['guia']=$this->model->nuevo_guia($dato, $dato2, $dato3, $dato4, $dato5);
		if (!$this->ion_auth->logged_in())
			{
			$this->load->view('header');
			$this->load->view('principal');
			}
		else
			{
			redirect('welcome');
			}
	}

    public function nueva_visita()
	{
		$dato=$this->input->post("fecha");
		$dato2=$this->input->post("descripcion");
		$dato3=$this->input->post("guia");
		$this->load->model("model");
		$result['guia']=$this->model->nueva_visita($dato, $dato2, $dato3);
		if (!$this->ion_auth->logged_in())
			{
			$this->load->view('header');
			$this->load->view('principal');
			}
		else
			{
			redirect('welcome');
			}
	}

    public function cargar_obra()
    {	
        $this->cargar_imagen();
        $dato=$this->input->post("nombre");
        $dato2=$this->input->post("fecha");
        $dato3=$this->input->post("desc");
        $dato4=$this->input->post("imagen");
        $this->upload->data($mi_archivo);
        $image_info = $this->upload->data('file_name');
        $this->load->model("model");
        $result['obra']=$this->model->cargar_obra($dato, $dato2, $dato3, $dato4);
        if (!$this->ion_auth->logged_in())
            {
                $this->load->view('header');
                $this->load->view('pp');
            }
        else
            {               
                redirect('welcome/ag_galeria');
            }
    }

    private function cargar_imagen()
    {
        $mi_archivo='imagen';
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg|gif|jfif';
        $config['max_size'] = 5000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;
        $this->load->library('upload', $config);
        $this->upload->initialize($config); 
        if (!$this->upload->do_upload ('imagen'))
        {
            echo $this->upload->display_errors();
            echo base_url('images');
        }
        else
        {
            var_export($this->upload->data($mi_archivo));
        }
        return;
    }

}
