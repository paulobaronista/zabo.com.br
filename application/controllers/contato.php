<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller
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
        $conteudo['pagina_view'] = 'contato_view';

        if ($this->input->post('enviar_email') == "enviar") {
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $cidade = $this->input->post('cidade');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('Contato enviado pelo site www.zabojardins.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@spicytracking.com.br", "$nome"); //senha: @f5(Sqkw#R=a
            $this->email->to('contato@spicytracking.com.br');
            $this->email->cc('paulobaronista@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                Telefone:	{$telefone}<br/>
                    E-mail:		{$email}<br/>
                        Cidade:	{$cidade}<br/>
                            Mensagem:	{$mensagem}<br/>
                            </body></html>");

            if ($this->email->send()) {
                redirect('https://www.zabojardins.com.br/contato/obrigado');
            } else {
                redirect('https://www.zabojardins.com.br/contato/fail');
            }
        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado()
    {
        $data['title'] = 'Zabo Engenharia S/A | Imóveis de Alto Padrão | São Paulo';
        $data['description'] = 'Referência em imóveis de alto padrão nos melhores bairros de São Paulo.';
        $data['keywords'] = 'alto padrão, Referência em imóveis, melhores bairros, São Paulo';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail()
    {
        $data['title'] = 'Zabo Engenharia S/A | Imóveis de Alto Padrão | São Paulo';
        $data['description'] = 'Referência em imóveis de alto padrão nos melhores bairros de São Paulo.';
        $data['keywords'] = 'alto padrão, Referência em imóveis, melhores bairros, São Paulo';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/contato.php */
