<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Zabo Engenharia S/A | Imóveis de Alto Padrão | São Paulo';
        $data['description'] = 'Referência em imóveis de alto padrão nos melhores bairros de São Paulo.';
        $data['keywords'] = 'alto padrão, Referência em imóveis, melhores bairros, São Paulo';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/home.php */
