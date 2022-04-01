<?php
namespace App\Models;
use CodeIgniter\Model;
class mProducto extends Model{

	protected $table = 'productos';
	protected $primaryKey = 'id_factura';

	protected $useAutoIncrement = true;

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields =  ['fecha_compra', 'descripcion_articulo','cantidad_articulo', 'precio_articulo','subtotal_articulo'];
	
	protected $useTimestamps = false;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $validationRules = [];
	protected $validationMessages = [];
	protected $skipValidation = false;

}
?>