<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('UserModel');
    $this->lang->load('login', 'portuguese');
  }

  public function index() {
    $this->load->helper('url');
    $this->load->view('login');
  }

  public function login() {
    $user = new UserModel();
    $user->login();
  }
}