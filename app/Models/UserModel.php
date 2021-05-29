<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model 
{
	protected $table = "users";
	protected $DBGroup = "default";
	protected $allowedFields = ['username','email','password'];
	protected $useTimestamps = true;
	//protected $createdField = 'created_at' (if we use the another name then also same for updated at),
	protected $validationRules = [];
	protected $validationMessages = [];

}
