<?php

namespace App\Models\Comercial;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prospecto extends Model{
    use SoftDeletes;

    protected $table = 'comercial_prospectos';

    protected $primaryKey = 'id';

    protected $fillable = ['id','fecha','id_procedencia','razon_social','nombre_comercial','imagen','giro_negocio','contacto','contacto_telefono','contacto_correo','direccion','estado','latitud','longitud','mapa','seguimiento','estatus','usuario_alta','id_prospecto','id_cliente'];
}
