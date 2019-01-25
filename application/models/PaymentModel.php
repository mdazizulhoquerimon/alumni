<?php
class PaymentModel extends CI_Model {

    public function get_user_payment_data($key)
    {
        $this->db->where('verificationkey', $key);
        $query = $this->db->get('payment_info');

        if($query->num_rows() > 0)
        {
            $row = $query->row_array();
            if(isset($row))
            {
                unset($row['verificationkey']);
                foreach($row as $key=>$value)
                {
                    if ($value == 1)
                    {
                        $row[$key] = 'fa-check';
                    }
                    else
                    {
                        $row[$key] = 'fa-times';
                    }
                }
                return $row;
            }
            else
            {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }


}