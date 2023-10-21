<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Categorias extends MY_Controller
{

    /**
     * author: Wagner Elias
     * email: wagner.elias@me.com
     *
     */

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('categorias_model');
        $this->data['menuCategorias'] = 'Categorias';
        $this->data['menuConfiguracoes'] = 'Configurações';
    }

    public function index()
    {
        $this->gerenciar();
    }

    public function gerenciar()
    {
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = base_url() . 'index.php/categorias/gerenciar/';
        $this->data['configuration']['total_rows'] = $this->categorias_model->count('categorias');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->categorias_model->get($this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'categorias/categorias';
        return $this->layout();
    }

    public function adicionar()
    {
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('categorias') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="alert alert-danger">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'categoria' => set_value('categoria'),
                'tipo' => set_value('tipo'),
            ];

            if ($this->categorias_model->add('categorias', $data) == true) {
                $this->session->set_flashdata('success', 'Categoria cadastrada com sucesso!');
                log_info('Adicionou uma categoria.');
                redirect(site_url('categorias/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'categorias/adicionarCategoria';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        $this->form_validation->set_rules('categoria', 'categoria', 'trim|required');
        $this->form_validation->set_rules('tipo', 'Tipo', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {

            $data = [
                'categoria' => $this->input->post('categoria'),
                'tipo' => $this->input->post('tipo'),
            ];

            if ($this->categorias_model->edit('categorias', $data, 'idCategorias', $this->input->post('idCategorias')) == true) {
                $this->session->set_flashdata('success', 'Categoria editada com sucesso!');
                log_info('Alterou uma categoria. ID: ' . $this->input->post('idCategorias'));
                redirect(site_url('categorias/editar/') . $this->input->post('idCategorias'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }

        $this->data['result'] = $this->categorias_model->getById($this->uri->segment(3));

        $this->data['view'] = 'categorias/editarCategoria';
        return $this->layout();
    }

    public function excluir()
    {
        $id = $this->uri->segment(3);
        $this->categorias_model->delete('categorias', 'idCategorias', $id);

        log_info('Removeu uma categoria. ID: ' . $id);

        redirect(site_url('categorias/gerenciar/'));
    }
}
