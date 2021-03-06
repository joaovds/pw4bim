<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('UserModel');
    $this->lang->load('register', 'portuguese');
  }

  public function index()
  {
    $this->load->helper('url');
    $this->load->view('register');
  }

  public function create()
  {
    $user = new UserModel();
    $user->create();
    redirect(base_url('login'));
  }
}