<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;
class Kendaraan extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kendaraan_model');
    }

    public function index_get()
    {
        $id=$this->get('id');
        if($id===null){
            $p=$this->get('page');
            $p=(empty($p)?1:$p);
            $total_data=$this->kendaraan_model->count();
            $total_page=ceil($total_data / 5);
            $start=($p-1) * 5;
            $list = $this->kendaraan_model->get(null, 5, $start);
            if($list){
                $data=[
                    'status'=>true,
                    'page'=>$p,
                    'total_data'=>$total_data,
                    'total_page'=>$total_page,
                    'data'=>$list
                ];
            }else{
                $data=['status'=>false,
                'pesan'=>'Data tidak ditemukan'];
            }
            $this->response($data, RestController::HTTP_OK);
        }else{
            $data = $this->kendaraan_model->get($id);
            if($data){
                $this->response(['status'=>true, 'data'=> $data],RestController::HTTP_OK);
            }else{
                $this->response(['status'=>false, 'pesan'=> $id .' tidak ditemukan'],RestController::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'id' => $this->post('id', true),
            'nama' => $this->post('nama', true),
            'plat' => $this->post('plat', true),
            'harga' => $this->post('harga', true)
        ];
        $simpan = $this->kendaraan_model->add($data);
        if ($simpan['status']) {
            $this->response(['status' => true, 'pesan' => $simpan['data'] . ' Data telah ditambahkan'], RestController::HTTP_CREATED);
        } else {
            $this->response(['status' => false, 'pesan' => $simpan['pesan']], RestController::HTTP_INTERNAL_ERROR);
        }
    }

    public function index_put()
    {
        $data = [
        'id' => $this->put('id', true),
        'nama' => $this->put('nama', true),
        'plat' => $this->put('plat', true),
        'harga' => $this->put('harga', true)
        ];
        $id = $this->put('id', true);
        if ($id === null) {
            $this->response(['status' => false, 'pesan' => 'Masukkan ID yang akan dirubah'], RestController::HTTP_BAD_REQUEST);
        }
        $simpan = $this->kendaraan_model->update($id, $data);
        if ($simpan['status']) {
            $status = (int)$simpan['data'];
            if ($status > 0)
                $this->response(['status' => true, 'pesan' => $simpan['data'] . ' Data telah dirubah'], RestController::HTTP_OK);
            else
                $this->response(['status' => false, 'pesan' => 'Tidak ada data yang dirubah'], RestController::HTTP_BAD_REQUEST);
        } else {
            $this->response(['status' => false, 'pesan' => $simpan['pesan']], RestController::HTTP_INTERNAL_ERROR);
        }   
    }

    public function index_delete()
    {
        $id = $this->delete('id', true);
        if ($id === null) {
            $this->response(['status' => false, 'pesan' => 'Masukkan ID yang akan dihapus'], RestController::HTTP_BAD_REQUEST);
        }
        $delete = $this->kendaraan_model->delete($id);
        if ($delete['status']) {
            $status = (int)$delete['data'];
            if ($status > 0)
                $this->response(['status' => true, 'pesan' => $id . ' telah dihapus'], RestController::HTTP_OK);
            else
                $this->response(['status' => false, 'pesan' => 'Data yang ingin dihapus tidak ditemukan'], RestController::HTTP_BAD_REQUEST);
        } else {
            $this->response(['status' => false, 'pesan' => $delete['pesan']], RestController::HTTP_INTERNAL_ERROR);
        }
    }
}