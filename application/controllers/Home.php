<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('UserModel');
    $this->lang->load('home', 'portuguese');
  }

  public function index() {
    $this->load->helper('url');
    $this->load->view('home');
  }

  public function logout() {
    $user = new UserModel();
    $user->logout();
  }

  public function delete($cd) {
    $this->db->where('cd', $cd);
    $this->db->delete('tb_user');
    redirect(base_url('login'));
  }
}