<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author ff
 */

class Users_controller extends Controller{

    function __construct() {
        parent::__construct();
    }

    public function main(){
        $this -> view -> render($this, 'main', 'testApp');
    }
    
    public function singUp(){
       $keys = Users::getKeys();
             unset($keys[0]);
           


       $_POST["idUsers"] = null;
       
    
       $this->validateKeys($keys, filter_input_array(INPUT_POST));
       
       $user = Users::instanciate($_POST);
       
       $r = $user ->create();
       
       header("Content-type: application/json;charset=utf-8");
       $g = User_bl::crearSesion($user);
       print_r($g);


    }
    
    public function singIn(){
        if(filter_input(INPUT_POST, "username") != null && filter_input(INPUT_POST, "pass") != null){
            $usr = Users::getBy("username", filter_input(INPUT_POST, "username"));
            $pass = Users::getBy("pass", filter_input(INPUT_POST, "pass"));
            if(!is_null($usr) && !is_null($pass)){
                $r = User_bl::login($usr,filter_input(INPUT_POST, "pass"));
                header("Content-type: application/json;charset=utf-8");
                json_encode($r);
                
            }

        }
    }

    
    
}
