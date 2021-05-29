<?php 
namespace App\Models;
use CodeIgniter\Model;

class CategoryModel extends Model 
{
	protected $table = "category";
	protected $DBGroup = "default";
	protected $allowedFields = ['title','description'];
	protected $useTimestamps = true;
	//protected $createdField = 'created_at' (if we use the another name then also same for updated at),
	protected $validationRules = [];
	protected $validationMessages = [];

}
