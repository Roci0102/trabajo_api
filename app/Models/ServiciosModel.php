<?php 
namespace App\Models;
use CodeIgniter\Model;
class ServiciosModel extends Model{
    protected $table  = 'servicios';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_cliente',
        'id_equipo',
        'problema',
        'fecha_ingreso',
        'estado'

    ];
}