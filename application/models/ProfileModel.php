<?php
class ProfileModel extends CI_Model {
    public function get_user_data($email)
    {
        $this->db->where('email', addslashes($email));
        $query = $this->db->get('registeredalumni');

        if($query->num_rows() > 0)
        {
            $row = $query->row_array();
            if(isset($row))
            {
                $data = $row;
                $verificationkey = $data['verificationkey'];
                $this->db->where('verificationkey', $verificationkey);
                $secondquery = $this->db->get('profiledata');
                $secondrow = $secondquery->row_array();
                $finalrowdata = array_merge($data, $secondrow);
                unset($data['verificationkey']);
                unset($data['password']);
                $fullname = trim($finalrowdata['fullname']);
                if(strpos($fullname, " ") !== FALSE)
                {
                    $names = explode(" ", $fullname);
                    $finalrowdata['firstname'] = $names[0];
                    $finalrowdata['lastname'] = $names[1];
                }
                return $finalrowdata;
            }
        }
    }
    
    public function edit_user_data($newuserdata, $useremail)
    {
        $this->db->where('email', addslashes($useremail));
        $query = $this->db->get('registeredalumni');

        if($query->num_rows() > 0)
        {
            $row = $query->row_array();
            if(isset($row))
            {
                $data = $row;
                $verificationkey = $data['verificationkey'];
                $this->db->where('verificationkey', $verificationkey);
                $this->db->update('profiledata', $newuserdata);
                return TRUE;
            }
        }
        else
        {
            return FALSE;
        }
    }

    public function edit_user_credentials($newusercredentials, $useremail)
    {
        $this->db->where('email', addslashes($useremail));
        if($this->db->update('registeredalumni', $newusercredentials))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }


}