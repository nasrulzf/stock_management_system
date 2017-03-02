<?php

class MY_Model extends CI_Model {

    public $table;
    public $pkey;

    public function __construct($table, $pkey){
        parent::__construct();

        $this->table = $table;
        $this->pkey = $pkey;

    }

}