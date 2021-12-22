<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Champion_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($id = null, $limit = 5, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('champions', $limit, $offset)->result();
        } else {
            return $this->db->get_where('champions', ['id_champion' => $id])->result_array();
        }
    }
    public function count()
    {
        return $this->db->get('champions')->num_rows();
    }

    public function add($data)
    {
        try {
            $this->db->insert('champions', $data);
            $error = $this->db->error();
            if (!empty($error['code'])) {
                throw new Exception('Terjadi Kesalahan: ' . $error['message']);
                return false;
            }
            return ['status' => true, 'data' => $this->db->affected_rows()];
        } catch (Exception $ex) {
            return ['status' => false, 'msg' => $ex->getMessage()];
        }
    }
    public function update($id, $data)
    {
        try {
            $this->db->update('champions', $data, ['id_champion' => $id]);
            $error = $this->db->error();
            if (!empty($error['code'])) {
                throw new Exception('Terjadi Kesalahan: ' . $error['message']);
                return false;
            }
            return ['status' => true, 'data' => $this->db->affected_rows()];
        } catch (Exception $ex) {
            return ['status' => false, 'msg' => $ex->getMessage()];
        }
    }

    public function delete($id)
    {
        try {
            $this->db->delete('champions', ['id_champion' => $id]);
            $error = $this->db->error();
            if (!empty($error['code'])) {
                throw new Exception('Terjadi Kesalahan: ' . $error['message']);
                return false;
            }
            return ['status' => true, 'data' => $this->db->affected_rows()];
        } catch (Exception $ex) {
            return ['status' => false, 'msg' => $ex->getMessage()];
        }
    }
}