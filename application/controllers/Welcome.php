<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends ClientsController
{
    public function __construct()
    {
        parent::__construct();
        hooks()->do_action('clients_authentication_constructor', $this);
    }

    public function index()
    {
        $data['title'] = _l('clients_login_heading_no_register');
        $this->data($data);
        $this->view('home');
        $this->layout();
    }

    // Added for backward compatibilies
    // public function admin()
    // {
    //     redirect(admin_url('authentication'));
    // }
}
