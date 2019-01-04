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

        public function verify_email($key)
        {
            $this->db->where('verificationkey', $key);
            $this->db->where('isverified',0);
            $query = $this->db->get('registeredalumni');

            if($query->num_rows() > 0)
            {
                $data['isverified'] = 1;
                $this->db->where('verificationkey', $key);
                $this->db->update('registeredalumni', $data);
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
}