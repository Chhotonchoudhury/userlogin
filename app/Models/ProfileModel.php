<?php 
namespace App\Models;
use CodeIgniter\Model;

class ProfileModel extends Model 
{
	protected $table = "profile";
	protected $DBGroup = "default";
	protected $allowedFields = ['user_id','name','address','city','state','country'];
	protected $useTimestamps = true;
	//protected $createdField = 'created_at' (if we use the another name then also same for updated at),
	protected $validationRules = [];
	protected $validationMessages = [];

}
