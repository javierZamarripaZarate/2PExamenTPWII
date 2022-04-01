<?php
namespace App\Models;
use CodeIgniter\Model;
class mCliente extends Model{

	protected $table = 'cliente';
	protected $primaryKey = 'id_cliente';

	protected $useAutoIncrement = true;

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['usuario', 'password','nombre', 'apellido','edad'];

	protected $useTimestamps = false;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $validationRules = [];
	protected $validationMessages = [];
	protected $skipValidation = false;

}
?>