<?php
    class LoginModel extends CI_Model{
        public function checkLogin($email, $password){
            $query = $this->db->where('email', $email)->where('password', $password)->get('customers');
            return $query->result();
        }
        public function newCustomer($data){
            return $this->db->insert('customers',$data);
        }
        public function newShipping($data){
            $this->db->insert('shipping',$data);
            return $ship_id = $this->db->insert_id();
        }
        public function insert_order($data_order){
            return $this->db->insert('orders',$data_order);
        }
        public function insert_orders_detail($data_orders_detail){
            return $this->db->insert('orders_detail',$data_orders_detail);
        }
    }
?>