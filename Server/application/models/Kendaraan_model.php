<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kendaraan_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function get($id=null, $limit=99999, $offset=0)
  {
    if($id===null){
      return $this->db->get('kendaraan', $limit, $offset)->result();
    }else{
      return $this->db->get_where('kendaraan', ['id'=>$id])->result_array();
    }
  }

  public function count(){
    return $this->db->get('kendaraan')->num_rows();
  }

  public function add($data)
  {
    try {
      $this->db->insert('kendaraan', $data);
      $error = $this->db->error();
      if (!empty($error['code'])) {
        throw new Exception('Terjadi kesalahan: ' . $error['message']);
        return false;
      }
      return ['status' => true, 'data' => $this->db->affected_rows()];
    } catch (Exception $ex) {
      return ['status' => false, 'pesan' => $ex->getMessage()];
    }
  }

  public function update($id, $data)
  {
    try {
      $this->db->update('kendaraan', $data, ['id' => $id]);
      $error = $this->db->error();
      if (!empty($error['code'])) {
        throw new Exception('Terjadi kesalahan: ' . $error['message']);
        return false;
      }
      return ['status' => true, 'data' => $this->db->affected_rows()];
    } catch (Exception $ex) {
      return ['status' => false, 'pesan' => $ex->getMessage()];
    }
  }

  public function delete($id)
  {
    try {
      $this->db->delete('kendaraan', ['id' => $id]);
      $error = $this->db->error();
      if (!empty($error['code'])) {
        throw new Exception('Terjadi kesalahan: ' . $error['message']);
        return false;
      }
      return ['status' => true, 'data' => $this->db->affected_rows()];
    } catch (Exception $ex) {
      return ['status' => false, 'pesan' => $ex->getMessage()];
    }
  }
}