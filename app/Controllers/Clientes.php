<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use Override;

class Clientes extends ResourceController{
    use ResponseTrait;

    protected $modelName='App\Models\ClientesModel';
    protected $format = 'json';

    public function index()
    {
        $clientes = $this->model->findAll();
        return $this->respond($clientes);
    }


    
    public function show($id = null)
    {
    $clientes = $this->model->find($id);
    if ($clientes === null ){
        return $this ->failNotFound('clientee no encontrado');
    }
    return $this->respond($clientes);
    }


    public function create()
    {
        $datos = $this->request->getJSON(true);
        $this->model->insert($datos);
        return $this->respondCreated($datos);
        
    }
     public function update ($id = null){

     $clientes = $this->model->find($id);
     if($clientes === null){
        return $this ->failNotFound('Cliente no encontrado');

     }
     $datos = $this->request->getJSON(true);
     $this->model->update($id,$datos);
     return $this->respond($datos);
     }
     public function delete($id = null){
        $clientes = $this->model-> find($id);
        if($clientes === null){
            return $this->failNotFound('client no encontraoo');
            
        }
       
        $this->model->delete($id);
        return $this->respond(['mensaje'=>'cliente eliminado']);
     }
}