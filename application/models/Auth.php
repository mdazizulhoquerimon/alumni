<?php
class Auth extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function loginfunc($email, $password)
        {
            $this->db->where('email', $email);
            $this->db->where('password', $password);

            $query = $this->db->get('registeredalumni');

            if($query->num_rows() > 0)
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }

        public function registeruser($data)
        {
            $this->db->insert('registeredalumni',$data);
            return $this->db->insert_id();
        }
}