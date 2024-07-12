<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users_bl
 *
 * @author PabloAnibal
 */
class User_bl {
    
    public static function crearSesion(Users $usr){
        
        Session::set("username", $usr->getUsername());
        Session::set("idUsers", $usr->getIdUsers());
        
    }
    
    public static function cerrarSesion(){
        
        Session::remove("username");
        Session::remove("idUsers");
        
    }
    
    public static function login(Users $usr,$password){
           if($usr->getPass() == $password){
               $r["error"] = 0;
               self::crearSesion($usr);
           }else{
               $r["error"] = 1;
           }
           return $r;
    }
    
}