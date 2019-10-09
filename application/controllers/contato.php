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
        $data['title'] = 'Café Canaan';
        $data['description'] = 'O café Canaan mudou para melhor. Vem muita coisa boa por aí! Você vai se surpreender!';
        $data['keywords'] = '';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if ($this->input->post('enviar_email') == "enviar") {
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $interesse = $this->input->post('interesse');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('Contato enviado pelo site www.canaan.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@maei.com.br", "$nome"); //senha: @piTs23A
            $this->email->to('contato@maei.com.br');
            $this->email->cc('paulobaronista@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                Telefone:	{$telefone}<br/>
                    E-mail:		{$email}<br/>
                        Assunto:	{$interesse}<br/>
                            Mensagem:	{$mensagem}<br/>
                            </body></html>");

            if ($this->email->send()) {
                redirect('https://www.canaan.com.br/contato/obrigado');
            } else {
                redirect('https://www.canaan.com.br/contato/fail');
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
        $data['title'] = 'Café Canaan';
        $data['description'] = 'O café Canaan mudou para melhor. Vem muita coisa boa por aí! Você vai se surpreender!';
        $data['keywords'] = '';
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
        $data['title'] = 'Café Canaan';
        $data['description'] = 'O café Canaan mudou para melhor. Vem muita coisa boa por aí! Você vai se surpreender!';
        $data['keywords'] = '';
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
