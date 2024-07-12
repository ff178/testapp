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
class Tests extends Model {

    protected static $table = "Tests";
    
    private $idTests;
    private $idUsers;
    private $name;
    private $descrip;
    
    function __construct($idTests, $idUsers, $name, $descrip) {
        $this->idTests = $idTests;
        $this->idUsers = $idUsers;
        $this->name = $name;
        $this->descrip = $descrip;
    }
    
    private $has_many = array(
       'Questions' => array(
           'class' => 'Questions',
           'my_key' => 'idTests',
           'other_key' => 'idQuestions',
           'join_other_as' => 'idTests',
           'join_self_as' => 'idTests',
           'join_table' => 'Questions'
       )
    );
    
    private $has_one = array(
        'Users' => array(
            'class' => 'Users',
            'join_as' => 'idUsers',
            'join_with' => 'idUsers',
            'join_table' => 'Tests'
        )
    );
    
    public function getMyVars() {
        return get_object_vars($this);
    }
    
    function getIdTests() {
        return $this->idTests;
    }

    function getIdUsers() {
        return $this->idUsers;
    }

    function getName() {
        return $this->name;
    }

    function getDescrip() {
        return $this->descrip;
    }

    function setIdTests($idTests) {
        $this->idTests = $idTests;
    }

    function setIdUsers($idUsers) {
        $this->idUsers = $idUsers;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescrip($descrip) {
        $this->descrip = $descrip;
    }
    
    
    function getHas_many() {
        return $this->has_many;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }



}