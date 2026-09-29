<?php 
namespace App\Models;
use CodeIgniter\Model;
class EquiposModel extends Model{
    protected $table  = 'equipos';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_cliente',
        'tipo_equipo',
        'marca',
        'modelo',
        'numero_serie'

    ];
}