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
class Users extends Model {

    protected static $table = "Users";
    
    private $idUsers;
    private $username;
    private $pass;
    
    function __construct($idUsers, $username, $pass) {
        $this->idUsers = $idUsers;
        $this->username = $username;
        $this->pass = $pass;
    }
    
    private $has_many = array(
       'Tests' => array(
           'class' => 'Tests',
           'my_key' => 'idUsers',
           'other_key' => 'idTests',
           'join_other_as' => 'idUsers',
           'join_self_as' => 'idUsers',
           'join_table' => 'Tests'
       )
    );
    
    public function getMyVars() {
        return get_object_vars($this);
    }
    
    
    function getIdUsers() {
        return $this->idUsers;
    }

    function getUsername() {
        return $this->username;
    }

    function getPass() {
        return $this->pass;
    }

    function setIdUsers($idUsers) {
        $this->idUsers = $idUsers;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function getHas_many() {
        return $this->has_many;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }

}