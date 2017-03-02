<?php


class Categories_Model extends MY_Model {

    public function __construct(){
        parent::__construct('T_M_CATEGORIES', 'CAT_ID');
    }

    public function get_all(){
        $query = $this->db->get($this->table);

        if(count($query) > 0){
            return $query->result();
        }else{
            return [];
        }

    }

    public function get_by_id($id){

    }

}