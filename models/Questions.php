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
class Questions extends Model {

    protected static $table = "Questions";
    
    private $idQuestions;
    private $idTests;
    private $descrip;
    
    function __construct($idQuestions, $idTests, $descrip) {
        $this->idQuestions = $idQuestions;
        $this->idTests = $idTests;
        $this->descrip = $descrip;
    }
    
    private $has_one = array(
        'Tests' => array(
            'class' => 'Tests',
            'join_as' => 'idTests',
            'join_with' => 'idTests',
            'join_table' => 'Tests'
        )
    );
    
    public function getMyVars() {
        return get_object_vars($this);
    }
    
    function getIdQuestions() {
        return $this->idQuestions;
    }

    function getIdTests() {
        return $this->idTests;
    }

    function getDescrip() {
        return $this->descrip;
    }

    function setIdQuestions($idQuestions) {
        $this->idQuestions = $idQuestions;
    }

    function setIdTests($idTests) {
        $this->idTests = $idTests;
    }

    function setDescrip($descrip) {
        $this->descrip = $descrip;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }



}