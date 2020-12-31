<?php 
use GuzzleHttp\Client;
class Kendaraan_model extends CI_model {
    private $_client;
    public function __construct(){
        $this->_client = new Client([
            'base_uri' => 'http://localhost/RestServer_1718050/Server/index.php/'
        ]);
    }

    public function getAllKendaraan()
    {
        $response =$this->_client->request('GET', 'kendaraan', [
            'query' => [
                'API-TOKEN' => '240499'
            ],
        ]);

        $result= json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function tambahDataKendaraan()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "nama" => $this->input->post('nama', true),
            "plat" => $this->input->post('plat', true),
            "harga" => $this->input->post('harga', true),
            'API-TOKEN' => '240499'
        ];

        $response =$this->_client->request('POST', 'kendaraan', [
            'form_params' => $data
        ]);
        $result= json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
    
    public function getKendaraanById($id)
    {
         $response =$this->_client->request('GET', 'kendaraan', [
            'query' => [
                'id' => $id,
                'API-TOKEN' => '240499'
            ]
        ]);

        $result= json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
        
    }

    public function ubahDataKendaraan()
    {
        $data = [
            
            "nama" => $this->input->post('nama', true),
            "plat" => $this->input->post('plat', true),
            "harga" => $this->input->post('harga', true),
            "id" => $this->input->post('id', true),
            'API-TOKEN' => '240499',
            
        ];

        $response =$this->_client->request('PUT', 'kendaraan', [
            'form_params' => $data
        ]);
        $result= json_decode($response->getBody()->getContents(), true);
        return $result;
    }
   

    public function hapusDataKendaraan($id)
    {
        $response =$this->_client->request('DELETE', 'kendaraan', [
            'form_params' => [
                'id' => $id,
                'API-TOKEN' => '240499'
            ],
        ]);

        return $result['data'][0];
    }
    
}