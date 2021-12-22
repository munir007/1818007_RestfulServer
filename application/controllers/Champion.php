<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Champion extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Champion_Model', 'champ');
    }

    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $p = $this->get('page');
            $p = (empty($p) ? 1 : $p);
            $total_data = $this->champ->count();
            $total_page = ceil($total_data / 5);
            $start = ($p - 1) * 5;

            $list = $this->champ->get(null, 5, $start);
            if ($list) {
                $data = [
                    'status' => true,
                    'page' => $p,
                    'total_data' => $total_data,
                    'total_page' => $total_page,
                    'data' => $list
                ];
            } else {
                $data = [
                    'status' => false,
                    'msg' => 'Data tidak ditemukan'
                ];
            }
            $this->response($data, RestController::HTTP_OK);
        } else {
            $data = $this->champ->get($id);
            if ($data) {
                $this->response(['status' => true, 'data' => $data], RestController::HTTP_OK);
            } else {
                $this->response(['status' => false, 'msg' => $id . ' tidak ditemukan'], RestController::HTTP_NOT_FOUND);
            }
        }
    }
    public function index_post()
    {
        $data = [
            'id_champion' => $this->post('id'),
            'nama' => $this->post('nama'),
            'role' => $this->post('role'),
            'lane' => $this->post('lane'),
            'region' => $this->post('region'),
            'gender' => $this->post('gender'),
            'difficulty' => $this->post('difficulty')
        ];
        $simpan = $this->champ->add($data);
        if ($simpan['status']) {
            $this->response(['status' => true, 'msg' => $simpan['data'] . 'Data telah ditambahkan'], RestController::HTTP_CREATED);
        } else {
            $this->response(['status' => false, 'msg' => $simpan['msg']], RestController::HTTP_INTERNAL_ERROR);
        }
    }
    public function index_put()
    {
        $data = [
            'id_champion' => $this->put('id'),
            'nama' => $this->put('nama'),
            'role' => $this->put('role'),
            'lane' => $this->put('lane'),
            'region' => $this->put('region'),
            'gender' => $this->put('gender'),
            'difficulty' => $this->put('difficulty')
        ];
        $id = $this->put('id_champion');
        if ($id === null) {
            $this->response(['status' => false, 'msg' => 'Masukkan Id Champions yang akan dirubah'], RestController::HTTP_BAD_REQUEST);
        }
        $simpan = $this->champ->update($id, $data);
        if ($simpan['status']) {
            $status = (int)$simpan['data'];
            if ($status > 0) {
                $this->response(['status' => true, 'msg' => $simpan['data'] . ' Data telah diubah'], RestController::HTTP_OK);
            } else {
                $this->response(['status' => false, 'msg' => 'Tidak ada data yang dirubah'], RestController::HTTP_BAD_REQUEST);
            }
        } else {
            $this->response(['status' => false, 'msg' => $simpan['msg']], RestController::HTTP_INTERNAL_ERROR);
        }
    }
    public function index_delete()
    {
        $id = $this->delete('id_champion');
        if ($id === null) {
            $this->response(['status' => false, 'msg' => 'Masukkan Id Champions yang akan dihapus'], RestController::HTTP_BAD_REQUEST);
        }
        $delete = $this->champ->delete($id);
        if ($delete['status']) {
            $status = (int)$delete['data'];
            if ($status > 0) {
                $this->response(['status' => true, 'msg' => $id . ' Data telah dihapus'], RestController::HTTP_OK);
            } else {
                $this->response(['status' => false, 'msg' => 'Tidak ada data yang dihapus'], RestController::HTTP_BAD_REQUEST);
            }
        } else {
            $this->response(['status' => false, 'msg' => $delete['msg']], RestController::HTTP_INTERNAL_ERROR);
        }
    }
}
