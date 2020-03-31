<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends CI_Model {
    public function store($username){
        if($this->get_username($username) == null){
            $data = array(
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'postcode' => $this->input->post('postcode'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email')
            );
    
            return $this->db->insert('users', $data);
        }else{
            return ;
        }

    }
    
    public function get_username($username){
        $this->db->where('username', $username);
        return $this->db->get('users')->row_array();
    }

}
?>