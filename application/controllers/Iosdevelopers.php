<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Iosdevelopers extends Frontend_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = $this->lang->line("home_title");
        $data['description'] = $this->lang->line("description_title");
        $data['og'] = $this->lang->line("home_title");
        $data['og_image'] = $this->lang->line("og_image");
        $data['body_view'] = 'ios-developers';
        $this->load->view('template/layout_manager', $data);
    }
}