<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Servicios extends ResourceController{
    use ResponseTrait;

    protected $modelName='App\Models\ServiciosModel';
    protected $format = 'json';
}