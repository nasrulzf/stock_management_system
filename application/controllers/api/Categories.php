<?php

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\Rest_Controller;

class Categories extends Rest_Controller {

    public function __construct(){
        parent::__construct();

        $this->methods['index_get']['limit'] = 1000;

        $this->load->model('Categories_Model', 'cm');
    }

    public function index_get(){
        
        $result = $this->cm->get_all();

        $count = count($result);

        $response_result = [
            'count'  => $count,
            'result' => $result
        ];

        if($count > 0){
            $this->response($response_result, REST_Controller::HTTP_OK);
        }else{
            $this->response($response_result, REST_Controller::HTTP_NOT_FOUND);
        }

    } 

}