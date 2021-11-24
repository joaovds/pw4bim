<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register2 extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('UserModel');
    $this->lang->load('register', 'english');
  }

  public function index()
  {
    $this->load->helper('url');
    $this->load->view('register2');
  }

  public function create()
  {
    $user = new UserModel();
    $user->create();
    redirect(base_url('login2'));
  }
}