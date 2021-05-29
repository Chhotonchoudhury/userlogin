<?php namespace App\Controllers;

  use App\Models\UserModel;
  $request = \Config\Services::request();
class Home extends BaseController
{
	 /**
	 * Class constructor.
	 */
	public function __construct()
	{
	      helper('url');
		  helper('form');
	}
	public function index()
	{
		//echo "Welcome to the mvc fraework";
		//return view('welcome_message');
		// This is the model object
		//$userModel = new UserModel();
		
		// Here we fetch all data
		//$user = $userModel->findAll(); //or we find single or all data like find(id)
		//$user = $userModel->find(1);
	   
	
	   /* Here we insert data 
	    $data =[ 
			'username' => 'sahir',
			'email' => 'Admin@admin.com',
			'password' => password_hash('secret', PASSWORD_DEFAULT),
		];
		$user = $userModel->insert($data);*/

		// Here we update data
		/*$user = $userModel->find(1);
		$user['email'] ='sahir123@gmail.com';
		$user['name'] = 'chhoton choudhury';
		$userModel->save($user);*/
		// updatting data

		// delete the data 
		//$user = $userModel->delete(1);
		// end the deletaion 
		//var_dump($user);

		//helper function 
		helper('mytext');
		$words = word_censor('This is the codeigniter tutorial for our code and this is the nice
		 code written chhoton choudhury' , ['is']);
		echo $words;
		

	}

	public function  test(){
		$email = \Config\Services::email();
	if($this->request->getMethod() == 'post'){		 
		//$namevalid=$this->request->getPost('Name');
			/*if(!$this->validate([
				'email' => 'required',
				'name' => 'required',
				'message' => 'required|min_length[70]'
			])){
				  $validator = $this->validator->listErrors();
				  var_dump($validator);
				
			}*/
			if(!$this->validate([
				'name' => 'required',
				'email' => 'required',
				'message' => 'required|min_length[20]'
			])){
				//this section for sending lists of errors 
				//$validator = $this->validator->listErrors('mylist');

				//this section for sending single errors
				$validator = $this->validator;
				
				
				// this is for set the value input field after validation auto

				$data = [
			   'name' => 'Chhoton Choudhury',
			   'title' => 'Home section',
			   'validator' => $validator,
			   'c_f' => [
				'form_open' => form_open('public/Home/test'),
				'email' => form_input(['type' => 'email' , 'class' => 'form-control' , 'name'=> 'email','value' => $this->request->getPost('email')]),
				'name' => form_input(['type' => 'text' , 'class' => 'form-control' , 'name'=> 'name','value' => $this->request->getPost('name')]),
				'message' => form_textarea(['name'=>'message', 'class'=>'form-control', 'value' => $this->request->getPost('message')]),
			         ],
		            ];
			}else{
				$validator = $this->validator;
				if(!$validator->hasError('email')){
					$email->setFrom($this->request->getPost('email'));
					$email->setTo('cont2chhoton@gmail.com');
					$email->setSubject($this->request->getPost('name'));
					$email->setMessage($this->request->getPost('message'));
					if($email->send()){
						$this->session->setFlashData('message' , 'Email sended successfully !');
					}else{
						$er = $email->printDebugger(['header']);
						print_r($er);
					}
					 
				}

				$data = [
			'name' => 'Chhoton Choudhury',
			'title' => 'Home section',
			'validator' =>null,
			'c_f' => [
				'form_open' => form_open('public/Home/test'),
				'email' => form_input(['type' => 'email' , 'class' => 'form-control' , 'name'=> 'email']),
				'name' => form_input(['type' => 'text' , 'class' => 'form-control' , 'name'=> 'name']),
				'message' => form_textarea(['name'=>'message', 'class'=>'form-control']),
			         ],
		        ];

			
			}
		}
		

		$data = [
			'name' => 'Chhoton Choudhury',
			'title' => 'Home section',
			'validator' => isset($validator) ? $validator : null,
			'c_f' => [
				'form_open' => form_open('public/Home/test'),
				'email' => form_input(['type' => 'email' , 'class' => 'form-control' , 'name'=> 'email','value' => $this->request->getPost('email')]),
				'name' => form_input(['type' => 'text' , 'class' => 'form-control' , 'name'=> 'name','value' => $this->request->getPost('name')]),
				'message' => form_textarea(['name'=>'message', 'class'=>'form-control', 'value' => $this->request->getPost('message')]),
				'form_close' => form_close(),
			         ],
				
		        ];
		
		return view('home' , $data);
		
		//echo view('templete/header',$data);
		//echo view('templete/footer');
		//return view('home' , $data);
		//echo view('welcome_message');
		/*$data =[
			'title' => 'This is home'
		];
	  echo view('templete/header');	
	  echo view('home2',$data);
	  echo view('templete/footer');*/
	  //echo view('home2');

	}

	
	
}
