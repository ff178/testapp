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

class Index_controller extends Controller{

    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this -> view -> render($this, 'index', 'testApp');
    }


}
