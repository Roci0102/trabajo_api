<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Equipos extends ResourceController{
    use ResponseTrait;

    protected $modelName='App\Models\EquiposModel';
    protected $format = 'json';

    public  function index(){
       $equipos= $this->model->findAll();
       return $this->respond($equipos);
 }

    public function show($id = null){
        $equipos= $this->model->find($id);
        if($equipos==null){
            return $this->failNotFound('equipo no encontrado');

        }
        return $this->respond($equipos);
    }

    public function create (){
        $datos= $this->request->getJSON(true);
        $this->model->insert($datos);
        return $this->respondCreated($datos);
    }


    public function update($id =null){
        $equipos= $this->model->find($id);
        if($equipos === null){
        return $this->failNotFound('equipo no encontrado');
        }
        $datos= $this->request->getJSON(true);
        $this->model->update($id,$datos);
        return $this->respond($datos);
    }

    
    public function delete($id = null)
    {
        $equipos= $this->model->find($id);
        if($equipos === null ){
            return $this->failNotFound('equipo no encontrado');

        }
        $this->model->delete ($id);
        return $this->respond(['mensaje'=>'datos liminados exitosamente']);
    }


}