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
            $verificationdata['verificationkey'] = $data['verificationkey'];
            $this->db->insert('profiledata', $verificationdata);
            $this->db->insert('registeredalumni', $data);
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

        public function getbatchname($verificationkey)
        {
            $this->db->select('batch');
            $this->db->where('verificationkey', $verificationkey);
            $query = $this->db->get('registeredalumni');

            if($query->num_rows() > 0)
            {
                $row = $query->row();
                if(isset($row))
                {
                    return $row->batch;
                }
                else
                {
                    return FALSE;
                }
            }
        }

        public function userid_exists($userid)
        {
            $this->db->where('userid',$userid);
            $query = $this->db->get('profiledata');
            if ($query->num_rows() > 0){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

        public function push_userid($generateduserid, $verificationkey)
        {
            $data['userid'] = $generateduserid;
            $this->db->where('verificationkey', $verificationkey);
            $this->db->update('profiledata', $data);
        }
}