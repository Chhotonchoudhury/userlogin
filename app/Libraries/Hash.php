<?php
namespace App\Libraries;
class Hash
{
    public static function make($password){
        return password_hash($password, PASSWORD_BCRYPT);
    }
    public static function check($password , $dbpassword){
        if(password_verify($password , $dbpassword)){
            return true;
        }else{
            return false;
        }
    }
}

?>