<?php
namespace App\Controllers;

class test  extends BaseController
{
     public function index()
           {
             echo "hello world";
           }

     public function about($params="gest")
           {
             echo "This is the routs".$params;
           }

}


?>