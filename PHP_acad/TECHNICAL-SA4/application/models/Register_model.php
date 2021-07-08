<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends CI_Model
{
    public function insert_user($data)
    {
        $this->db->insert("tsa3_table", $data);
        return $this->db->insert_id();
    }

    public function verify_email($key)
    {
        $this->db->where("tsa3_code", $key);
        $this->db->where("tsa3_is_verified", "no");
        $query = $this->db->get("tsa3_table");

        if ($query->num_rows() > 0) {
            $data["tsa3_is_verified"] = "yes";
            $this->db->where("tsa3_code", $key);
            $this->db->update("tsa3_table", $data);
            return TRUE;
        } else {
            return FALSE;
        }
    }
}