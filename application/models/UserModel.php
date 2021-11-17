<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
  public function create() {
    $data = array(
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'password' => md5($this->input->post('password'))
    );

    return $this->db->insert('tb_user', $data);
  }
}
?>