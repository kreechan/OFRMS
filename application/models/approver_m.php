<?php
        class Approver_m extends CI_Model
        {
            public function insertEndorser_model($data)
            {
                $this->db->insert_batch('endorser', $data);
            }
        }
?>