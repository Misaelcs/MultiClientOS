<?php
class EmpresaUsuario_model extends CI_Model
{

    /**
     * author: Wagner Elias
     * email: wagner.elias@me.com
     *
     */

    public $db;

    public function __construct()
    {
        parent::__construct();

        $dsn = 'mysqli://root:root@mysql/'.($this->session->userdata('client_db') ?? 'admin_database');
        
        $this->db = $this->load->database($dsn, true);
    }
}
