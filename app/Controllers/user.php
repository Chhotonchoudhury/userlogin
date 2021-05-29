<?php
namespace App\Controllers;
use App\Libraries\Hash;
class user  extends BaseController
{
    public function __construct()
	{
	      helper('url');
		  helper('form');
	}
   
public function index(){
		return view('login');
	}
	public function reg(){
		return view('registration');
	}

    public function save(){

        if($this->request->getMethod() == 'post'){		 
        //let's validate the data
        $validation = $this->validate([
        'name' => 'required',
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[5]|max_length[12]',
        'cpassword' => 'required|min_length[5]|max_length[12]|matches[password]'
        ]);
        
        if(!$validation){
            return view('registration',['validation'=>$this->validator]);
        }else{
                $name = $this->request->getPost('name');
                $email = $this->request->getPost('email');
                $cpassword = $this->request->getPost('cpassword');
                $values = [
                    'username' => $name,
                    'email' => $email,
                    'password' => Hash::make($cpassword),
                ];
                $usermodel = new \App\Models\UserModel();
                $query = $usermodel->insert($values);
                if(!$query){
                    return redirect()->back()->with('fail', 'something want wrong');
                }else{
                    return redirect()->to('reg')->with('success','you are register successfully');
                }
             }
      }

    }

    public function check(){
        if($this->request->getMethod() == 'post'){	
        $validation = $this->validate([
            'email' => [
            'rules' => 'required|valid_email|is_not_unique[users.email]',
            'errors' =>[
                'required' => 'Email is required',
                'valid_email' => 'Enter a valid email address',
                'is_not_unique' => 'This email not regitered',
                ]
            ],

            'password' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' =>[
                     'required' => 'Password is required',
                     'min_length' => 'Password must have atleast 5 characthers in length',
                     'max_length' => 'Password not have more then 12 characthers in length',
                ]
            ],
        ]);
            if(!$validation){
                return view('login' , ['validation'=>$this->validator]);
            }else{
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');
                $usermodel = new \App\Models\UserModel();
                $user_info = $usermodel->where('email',$email)->first();
                $check_pass = Hash::check($password, $user_info['password']);
                if(!$check_pass){
                    return redirect()->to('index')->with('fail','your password is Incorrect');
                }else{
                    return redirect()->to('index')->with('success','you are successfully login');
                }
            }
        }
    }
}


?>